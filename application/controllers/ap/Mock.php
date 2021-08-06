<?php defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Mock extends REST_Controller{
    private $key;
    public function __construct(){
        parent:: __construct();
        $this->load->model(array('GenModel'));
        $this->key = Utils::key;
        $this->ut = (new Utils);
        $this->ut->cors2();
    }
    public function VerifyCandidate_post()
    {
        //header("Access-Control-Allow-Origin: *");
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());
        //echo json_encode($_POST);exit;
        //check if user exists already
        $select = 'first_name,last_name,middle_name,id,institution,user_id';
        $cand = $this->GenModel->fetch_single_three(Utils::tblCand,array('email'=>$_POST['id']),$select,array('phoneno'=>$_POST['id']));
        if(!isset($cand)){
            //get wallet id
            $status = 'Failed';
            $msg = 'No user record found';
            $wallet = $this->GenModel->fetch_single(Utils::tblWallet,array('account_no'=>$_POST['id']));
            //echo json_encode($wallet[]);exit;
            if(isset($wallet)){
                $cand = $this->GenModel->fetch_single(Utils::tblCand,array('user_id'=>$wallet['candidate']),$select);
                //echo json_encode($cand);exit;
                $status = 'Successful';
                $msg = 'User record found';
            }
        }
        else{
            $status = 'Successful';
            $msg = 'User record found';
        }
        if(isset($cand)){
            $inst = $this->GenModel->fetch_single(Utils::tblInst,array('id'=>$cand['institution']));
            $cand['institution'] = 'Not available';
            if(isset($inst)){
                $cand['institution'] = $inst['name'];
            }
        }
        $message = array(
            'Status'=>$status,
            'Message'=>['data'=>@$cand,'message'=>$msg],
        );
        $this->response($message,200);
    }
    public function TransactionStatus_get($id)
    {
        //header("Access-Control-Allow-Origin: *");
        $id = $this->security->xss_clean($id);
        //echo $id;exit;
        $data = $this->GenModel->fetch_single(Utils::tblTrans,array('reference_no'=>$id));
        if(isset($data)){
            if(strtolower($data['status'])=='successful'){
                $status = 'Successful';
                $msg = 'Record found';
            }
            else{
                $status = 'Failed';
                $msg = $data['status'];
            }
        }
        else{
            $status = 'Failed';
            $msg = 'No record found';
        }
        $message = array(
            'Status'=>$status,
            'Message'=>['data'=>@$cand,'message'=>$msg],
        );
        $this->response($message,200);
    }
    public function Donate_post()
    {
        //header("Access-Control-Allow-Origin: *");
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());
        //echo json_encode($_POST);exit;
        //create trans
        $transData = [
            'candidate'=>$_POST['candidate'],
            'amount'=>$_POST['amount'],
            'status'=>'pending',
            'type'=>'donor',
            'created_at'=>$this->ut->date(),
            'reference_no'=>date('ymdhis').rand(0,9),
        ];
        //echo json_encode($transData);exit;
        $transID = $this->GenModel->create(Utils::tblTrans,$transData);
        if($transID>0){
            $customer = $this->GenModel->fetch_single(Utils::tblCand,array('user_id'=>$transData['candidate']));
            //echo json_encode($customer);exit;
            //process flutter
            $transData2['currency'] = 'NGN';
            $transData2['tx_ref'] = $transData['reference_no'];
            $transData2['amount'] = $transData['amount'];
            $transData2['payment_options'] = 'card';
            $transData2['redirect_url'] = base_url().'payment_completed/'.$transData2['tx_ref'];
            $transData2['customer'] = [
                'email'=>$customer['email'],
                'phonenumber'=>$customer['phoneno'],
                'name'=>$customer['first_name'].' '.$customer['last_name'],
            ];
            $transData2['customizations'] = [
                'title'=>'Support the Education of '.$transData2['customer']['name'],
                'descr'=>'Your support to '.$transData2['customer']['name'].' is strictly for acedemic purpose. '.$transData2['customer']['name'].' will not have access to the fund. It will be paid directly to the institution',
            ];
            $link = $this->ut->start_save($transData2);
            $data['link'] = $link;
            $data['tx_ref'] = $transData2['tx_ref'];
            $status = 'Successful';
            $msg = 'Connected to flutter';
        }
        else{
            $status = false;
            $msg = 'Unable to register transaction. Please try again later!';
        }
        //check if user exists already
        $message = array(
            'Status'=>$status,
            'Message'=>['data'=>@$data,'message'=>$msg],
        );
        $this->response($message,200);
    }
    public function webhook_post()
    {
        header("Access-Control-Allow-Origin: *");
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());
        //var_dump($_POST);exit;
        if(@($_POST['event']=='charge.completed')){
            //update tx_ref based on status
            $this->GenModel->update(Utils::tblTrans,array('status'=>$_POST['data']['status'],'updated_at'=>$this->ut->date()),array('reference_no'=>$_POST['data']['tx_ref']));
        }
        else if($_POST['txRef']){
            $this->GenModel->update(Utils::tblTrans,array('status'=>$_POST['status'],'updated_at'=>$this->ut->date()),array('reference_no'=>$_POST['txRef']));
            //credit wallet
            //get web hook details
            /*$webhook = $this->GenModel->fetch_single(Utils::tblHooks,array('id'=>$_POST['txRef']));
            $payLoad = json_decode($webhook['value']);
            if($payLoad->txRef){
                $ref = $payLoad->txRef;
            }
            else{
                $ref = $_POST['txRef'];
            }*/
            $ref = $_POST['txRef'];
            $trans = $this->GenModel->fetch_single(Utils::tblTrans,array('reference_no'=>$ref));
            //echo json_encode($trans);exit;
            if($trans['type']=='donor'){
                //credit walllet
                $wallet = $this->GenModel->fetch_multi(Utils::tblWallet,array('candidate'=>$trans['candidate']),'','id DESC');
                //echo json_encode($wallet[0]);exit;
                $walletH = [
                    'amount'=>$trans['amount'],
                    'created_at'=>$this->ut->date(),
                    'trans_type'=>'donor',
                    'trans_date'=>$this->ut->date(),
                    'wallet'=>$wallet[0]->id
                ];
                //echo json_encode($walletH);exit;
                //check if wallet exists
                $checDonorWallet = $this->GenModel->fetch_single(Utils::tblWallet,array('status'=>'1','candidate'=>$trans['candidate']));
                if(isset($checDonorWallet))
                    $this->GenModel->updateBool(Utils::tblWallet,'balance','balance+'.$trans['amount'], array('candidate'=>$trans['candidate'],'status'=>'1'), false);
                else{
                    $code = rand(100002,999999);
                    $code = $this->ut->generateCode(Utils::tblWallet,array('account_no'=>$code),$code);
                    $id = $this->GenModel->create(Utils::tblWallet,['balance'=>$trans['amount'],'account_no'=>$code,'candidate'=>$trans['candidate'],'status'=>'1','created_at'=>$this->ut->date()]);
                    $walletH['wallet'] = $id;
                }
                $this->GenModel->create(Utils::tblWalletH,$walletH);

            }
            //to get card deatils
        }
        $this->GenModel->create(Utils::tblHooks,['value'=>json_encode($_POST)]);
    }
    public function Institution_get(){
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());       
        $unis = $this->GenModel->fetch_all(Utils::tblUni);
        $message = array(
            'Status'=>'Successful',
            'Message'=>[],
            'data'=>$unis,
        );
        $this->response($message,200);
    }
    public function Login_post()
    {
        //header("Access-Control-Allow-Origin: *");
        $message = [
            'status'=> false,
            'message'=>'Not allowed'
        ];
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());
        #form validation
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[80]|is_unique[users.email]',array('is_unique'=>'This %s address does not exist.'));
        if($this->form_validation->run() == FALSE)
        {
            //email exists aready so proceed to check login validity
            $_POST["password"] = Utils::encodePassword($_POST["password"]);
            //$_POST["password1"] = 1;
            $where = array('email'=>$_POST['email'],'password'=>$_POST['password']);
            $loginFound = $this->GenModel->fetch_single(Utils::tblUser,$where);
            //echo json_encode($loginFound);exit;
            if(isset($loginFound)){
                unset($loginFound['password']);
                //generate token
                $token = Utils::generateToken($loginFound);
                //update last seen
                $where = array('id'=>$loginFound['id']);
                $data = array('ip_address'=>$this->input->ip_address());
                $this->GenModel->update(Utils::tblUser,$data,$where);
                $loginFound['last_seen'] = date('Y-m-d H:i:s');
                $status = true;
                $msg = 'Login Successful';
            }
            else{
                $status = false;
                $msg = "Login information provided is invalid. Please check again!";
            }
            $message = array(
                'status'=>$status,
                'message'=>$msg,
                'token'=>@$token,
                'userData'=>@$data
            );
            $this->response($message,200);
        }
        else{
            $message = array(
                'status'=>false,
                'message'=>'Phone or email does not exist'
            );
            $this->response($message,200);
        }
    }
}