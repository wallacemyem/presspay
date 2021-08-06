<?php defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Major extends REST_Controller{
    private $key;
    public function __construct(){
        parent:: __construct();
        $this->load->model(array('GenModel'));
        $this->key = Utils::key;
        $this->ut = (new Utils);
        $this->ut->cors2();
        $this->upload_path = 'assets/uploads/';
    }
    function download_get($file)
    {
        /**if(!@Utils::isHTTPS())
            $folder = $_SERVER['DOCUMENT_ROOT'].'/v2/file/';
        else
            $folder = $_SERVER['DOCUMENT_ROOT'].'/file/';*/
        if(file_exists('./files/'.$file)){
            $this->load->helper('download');
            force_download('./files/'.$file, NULL);
            exit();
        }
        else{
            echo 'File does not exist';
        }
    }
    public function resource_post()
    {
        header("Access-Control-Allow-Origin: *");
		$message = [
				'status'=> false,
				'message'=>'Not allowed'
        ];
        $resList = $data = $this->GenModel->fetch_all(Utils::tblResource);
        $data2 = [];
        foreach($data as $d){
            $data2[$d->name] = $d->value;
        }
        //$states = $this->GenModel->fetch_all(Utils::tblState);
        //$category = $this->GenModel->fetch_all(Utils::tblCat);
        //$faqs = $this->GenModel->fetch_all(Utils::tblFAQs);
        //$cms = $this->GenModel->fetch_all(Utils::tblCMS);
        //$statusList = $this->GenModel->fetch_all(Utils::tblStatus);
        //$payMethods = $this->GenModel->fetch_all(Utils::tblPayM);
        //fetchByJoinSingle($cond, $tbl1, $tbl2, $key1, $key2)
        //$tbl1 = Utils::tblUser;
        //$tbl2 = Utils::tblProfile;
        //$users = $this->GenModel->fetchByJoinMulti(array(Utils::tblUser.'.level >'=>1,Utils::tblUser.'.level <='=>3),Utils::tblUser,Utils::tblProfile,'id','user_id',$tbl1.'.email, '.$tbl1.'.level,'.$tbl1.'.id as uid,'.$tbl2.'.*');
        //$customers = $this->GenModel->fetchByJoinMulti(array(Utils::tblUser.'.level'=>'0'),Utils::tblUser,Utils::tblProfile,'id','user_id',$tbl1.'.email, '.$tbl1.'.level,'.$tbl1.'.id as uid,'.$tbl2.'.*');
        $cmsData = [];
        /*foreach($cms as $c){
            $cmsData[$c->name] = $c->value;
        }*/
        $courses = $this->GenModel->fetch_all_select(Utils::tblCourses,'id,name');
        $message = array(
            'status'=>true,
            'data'=>$resList,
            'message'=>'success',
            'states'=>@$states,
            'courses'=>@$courses,
            'faqs'=>@$faqs,
            'cms'=>@$cmsData,
            't_status'=>@$statusList,
        );
        $message = array_merge($message,$data2);
        $this->response($message,200);
    }
    public function create_post(){
        header("Access-Control-Allow-Origin: *");
		$message = [
				'status'=> false,
				'message'=>'Not allowed'
			];
        @Utils::vet($message);
        $userID = (int) @Utils::getCurrentUserId();
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else{
            $_POST = $this->security->xss_clean(Utils::getContents());
        }
        $tblArrays = [
            'status'=>Utils::tblStatus,
            'user'=>Utils::tblUser,
            'payMethod'=>Utils::tblPayM,
            'payment'=>Utils::tblPay,
            'transaction'=>Utils::tblTR,
            'update'=>Utils::tblUpd,
        ];
        $term = $_POST['term'];
        unset($_POST['term']);
        unset($_POST['id']);
        unset($_POST['$$hashKey']);
        //echo json_encode($_POST);exit;
        if($term=='user'){
            #form validation
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[80]|is_unique[users.email]',array('is_unique'=>'This %s exists already. Please try another'));
            $this->form_validation->set_rules('phone','Phone number','trim|required|numeric|min_length[11]|max_length[20]|is_unique[profile.phone]',array('is_unique'=>'This %s exists already. Please try another'));
            $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[100]');        
            if($this->form_validation->run() == FALSE)
            {
                @Utils::setResponse2(false,validation_errors());
            }
            $pass = $_POST['password'];
            $_POST["password"] = Utils::encodePassword($_POST["password"]);
            $_POST['date'] = date('Y-m-d H:i:s');
            $_POST['ip'] = $this->input->ip_address();
            $email = $_POST['email'];
            //echo json_encode($_POST);exit;
            $mailMsg = "Hi, <strong>".$_POST['name']."[<span class='black'>".$_POST['email']."</span>]</strong>,<br><br> 
                    Your account has been created successfully and your password is <strong><span class='black'>".$pass."</span></strong>. 
                    Thanks for choosing us!<br><br>Should you need assistance, please send an email to <strong><span class='black'>info@".Utils::domain."</span></strong>";
            $subject = Utils::siteName." - Account creation successful";
            $sendEmail = true;
            //create user record
            $userArr = [
                'email'=>@$_POST['email'],
                'password'=>@$_POST['password'],
            ];
            $check = $this->GenModel->fetch_single($tblArrays[$term],$userArr);
            if(count($check)>0){
                $this->response([
                    'status'=>false,
                    'message'=>'Same record exists already'
                ],200);
            }
            $userArr = [
                'level'=>@$_POST['level'],
                'email'=>@$_POST['email'],
                'password'=>@$_POST['password'],
                'created_date'=>@Utils::date(),
                'ip_address'=>$_POST['ip'],
            ];
            //echo json_encode($userArr);exit;
            $id = $this->GenModel->create($tblArrays[$term],$userArr);
            if($id>0){
                $dataArr = array(
                    'name'=>$_POST['name'],
                    'dob'=>@$_POST['dob'],
                    'gender'=>@$_POST['gender'],
                    'phone'=>@$_POST['phone'],
                    'address'=>@$_POST['address'],
                    'user_id'=>@$id,
                );
                $isSaved = $this->GenModel->create(Utils::tblProfile,$dataArr);
                $term = 'User account';   
            }
            else{
                @Utils::setResponse2(false,'User account could not be created');
            }
        }
        else if($term=='transaction'){
            @Utils::checkPermission(1);
            $recipient = $_POST['user_id'] = $_POST['customer']['id'];
            $statusName = $_POST['status_name'];
            $_POST['created_by'] = $userID;
            @$payType = $_POST['pay_type'];
            unset($_POST['customer']);
            unset($_POST['status_name']);
            unset($_POST['pay_type']);
            $check = $this->GenModel->fetch_single($tblArrays[$term],$_POST);
            if(count($check)>0 || @$_POST['id']){
                $this->response([
                    'status'=>false,
                    'message'=>'Same record exists already'
                ],200);
            }
            $refNo = $_POST['reference_no'] = @Utils::getReference();
            $_POST['created_date'] = @Utils::date();
            $isSaved = $this->GenModel->create($tblArrays[$term],$_POST);
            if(@$_POST['paid']){
                //set payment array 
                $payArr = array(
                    'reference_no'=>@Utils::getReference('pay'),
                    'amount'=>@$_POST['paid'],
                    'created_by'=>@$userID,
                    'customer'=>@$_POST['user_id'],
                    'tid'=>@$isSaved,
                    'pay_type'=>@$payType,
                    'created_date'=>@Utils::date(),
                );
                $isPay = $this->GenModel->create(Utils::tblPay,$payArr);
            }
            if($isSaved>0){
                $userD = $this->GenModel->fetchByJoinSingle(array(Utils::tblUser.'.id'=>$recipient), Utils::tblUser, Utils::tblProfile, 'id', 'user_id');
                $content = "
                    Dear ".ucwords($userD['name']).",<br><br>
                    Your transaction with reference number <b>".@$refNo."</b> has been logged. Details below:<br><br>
                    <b>Title</b>: New Transaction Logged.<br><br>
                    <b>Message</b>: Your transaction has been succesfully submitted and is under prosessing.<br><br>
                    <b>Status</b>: ".@$statusName.".<br><br>
                    You will begin to receive updates via email and portal when the status of your transaction changes. You can access your portal to see all updates and manage your transactions at https://".Utils::domain."<br><br>
                    Kind regards!";
                $email = $userD["email"];
                $subject = "Transaction Update [".@$refNo.'] on '.@Utils::siteName;
                @Utils::sendEmail($content,$email,$subject);
            }
        }
        else if($term=='update'){
            @Utils::checkPermission(1);
            $recipient = $_POST['user_id'];
            $refNo = $_POST['ref_no'];
            $statusName = $_POST['status_name'];
            $_POST['updated_by'] = $userID;
            $_POST['transaction_id'] = $_POST['tid'];
            //echo json_encode($_POST);exit;
            unset($_POST['tid']);
            unset($_POST['user_id']);
            unset($_POST['ref_no']);
            unset($_POST['status_name']);
            $check = $this->GenModel->fetch_single($tblArrays[$term],array('transaction_id'=>$_POST['transaction_id'],'status'=>$_POST['status']));
            if(count($check)>0){
                $this->response([
                    'status'=>false,
                    'message'=>'This status already exists for this transaction.'
                ],200);
            }
            $_POST['created_date'] = @Utils::date();
            $isSaved = $this->GenModel->create($tblArrays[$term],$_POST);
            if($isSaved>0){
                $userD = $this->GenModel->fetchByJoinSingle(array(Utils::tblUser.'.id'=>$recipient), Utils::tblUser, Utils::tblProfile, 'id', 'user_id');
                $content = "
                    Dear ".ucwords($userD['name']).",<br><br>
                    Your transaction with reference number <b>".@$refNo."</b> has a new update. Details below:<br><br>
                    <b>Title</b>: ".@$_POST['title'].".<br><br>
                    <b>Message</b>: ".@$_POST['body'].".<br><br>
                    <b>Status</b>: ".$statusName.".<br><br>
                    Please login to your portal to see all updates and manage your transactions. You can access your portal at https://".Utils::domain."<br><br>
                    Kind regards!";
                $email = $userD["email"];
                $subject = "Transaction Update [".@$refNo.'] on '.@Utils::siteName;
                @Utils::sendEmail($content,$email,$subject);
            }
        }
        else if($term=='payment'){
            @Utils::checkPermission(1);
            $_POST['customer'] = $_POST['customer_id'];
            $_POST['tid'] = $_POST['t_id'];
            $_POST['created_by'] = $userID;
            unset($_POST['customer_id']);
            unset($_POST['t_id']);
            $check = $this->GenModel->fetch_single($tblArrays[$term],$_POST);
            if(count($check)>0 || @$_POST['id']){
                $this->response([
                    'status'=>false,
                    'message'=>'Same record exists already'
                ],200);
            }
            $_POST['reference_no'] = @Utils::getReference('pay');
            $_POST['created_date'] = @Utils::date();
            $isSaved = $this->GenModel->create($tblArrays[$term],$_POST);
            if($isSaved>0){
                $this->GenModel->updateBool(Utils::tblTR,'paid','paid+'.$_POST['amount'],array('id'=>$_POST['tid']),FALSE);
            }
        }
        else{
            @Utils::checkPermission(1);
            $check = $this->GenModel->fetch_single($tblArrays[$term],$_POST);
            if(count($check)>0 || @$_POST['id']){
                $this->response([
                    'status'=>false,
                    'message'=>'Same record exists already'
                ],200);
            }
            $isSaved = $this->GenModel->create($tblArrays[$term],$_POST);
        }
        $termArr = explode('_',$term);
        if(count($termArr)>=2){
            if(@$termArr[2]=='cat'){
                $termArr[2] = 'Category';
            }
            $term = $termArr[0].' '.$termArr[1].' '.@$termArr[2];
        }
        if($isSaved>0){
            $status = true;
            $msg = ucwords($term)." has been created";
            if(@$sendEmail){
                $sentEmail = @Utils::sendEmail($mailMsg,$email,$subject);
                if(is_array($sentEmail)){
                    $msg .=' However, email could not be sent. '.$sentEmail['message'];
                }
            }
        }
        else{
            $status = false;
            $msg = ucwords($term)." could not be created";
        }
        $message = array(
            'status'=>$status,
            'message'=>$msg,
            'id'=>@$isSaved,
            'c'=>@$content
        );
        $this->response($message,200);
    }
    public function contact_post(){
        header("Access-Control-Allow-Origin: *");
        $message = [
            'status'=> false,
            'message'=>'Not allowed'
        ];
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else{
            $_POST = $this->security->xss_clean(Utils::getContents());
        }
        //echo json_encode($_POST);exit;
        $this->form_validation->set_rules('fname','First name','trim|alpha');        
        $this->form_validation->set_rules('lname','Last name','trim|alpha');        
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('phone','Phone','trim|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('msg','Message','trim|required|min_length[50]');
        if($this->form_validation->run() == FALSE)
        {
            //Form validation errors
            $message = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
                'message' => strip_tags(validation_errors())
            );
            $this->response($message,200);
        }
        else{
            $name = $_POST['name'] = $_POST['fname'].' '.$_POST['lname'];
            $content = $_POST['msg'];
            $reply_to = $from_email = $_POST['email'];
            $_POST['from'] = $from_email;
            unset($_POST['email']);
            //echo json_encode($_POST);exit;
            //send email
            //echo $from_email;exit;
            $to_email = "hello@".Utils::domain;
            //echo $to_email;exit;
            $subject = $name." Sent A New Message From Website";
            $content = $name." just sent you a message from your website. <br>Email is: ".$from_email.".<br><br>Phone: ".$_POST['phone'].".<br><br>Message:<br><br><b>".$content."</b><br><br>Please respond as appropriate.";
            $sendEmail = $this->ut->sendEmail($content, $to_email,$subject,$reply_to);
            if($sendEmail){
                $status = true;
                $message = "Message has been sent. We will get back to you shortly";
            }
            else{
                $status = false;
                $message = "Message could not be sent. Please try again later";
            }
            $message = ['status'=>$status,'message'=>$message,'content'=>@$content];
            $this->response($message,200);
        }
    }
    public function sub_post(){
        header("Access-Control-Allow-Origin: *");
        $message = [
            'status'=> false,
            'message'=>'Not allowed'
        ];
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else{
            $_POST = $this->security->xss_clean(Utils::getContents());
        }
        //echo json_encode($_POST);exit;
        $this->form_validation->set_rules('name','Name','trim');        
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('phone','Phone','trim|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('descr','Message','trim|required|min_length[50]');
        if($this->form_validation->run() == FALSE)
        {
            //Form validation errors
            $message = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
                'message' => strip_tags(validation_errors())
            );
            $this->response($message,200);
        }
        else{
            $name = $_POST['name'];
            $content = $_POST['descr'];
            $reply_to = $from_email = $_POST['email'];
            $_POST['from'] = $from_email;
            unset($_POST['email']);
            //echo json_encode($_POST);exit;
            //send email
            //echo $from_email;exit;
            //$to_email = "hello@".Utils::domain;
            $to_email = "yemiprodigy@gmail.com";//hello@.Utils::domain;
            //echo $to_email;exit;
            $subject = "NEW BOOKING From ".$name;
            $content = $name." just submitted a booking form on your website. <br>Name: ".$_POST['name'].".<br><br>Email: ".$from_email.".<br><br>Phone: ".$_POST['phone'].".<br><br>Project Description:<br><br><b>".$content."</b><br><br>Please respond as appropriate.";
            $sendEmail = $this->ut->sendEmail($content, $to_email,$subject,$reply_to);
            if($sendEmail){
                $status = true;
                $message = "Booking has been received. We will get back to you shortly";
            }
            else{
                $status = false;
                $message = "Booking could not be sent. Please try again later";
            }
            $message = ['status'=>$status,'message'=>$message,'content'=>@$content];
            $this->response($message,200);
        }
    }
    public function refer_post(){
        header("Access-Control-Allow-Origin: *");
        $message = [
            'status'=> false,
            'message'=>'Not allowed'
        ];
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else
            $_POST = $this->security->xss_clean(Utils::getContents());
        //echo json_encode($_POST);exit;
        $this->form_validation->set_rules('rname','Your name','trim');        
        $this->form_validation->set_rules('remail','Your email','trim|required|valid_email');
        $this->form_validation->set_rules('fname','Name of friend','trim');        
        $this->form_validation->set_rules('femail','Email of friend','trim|required|valid_email|max_length[100]|is_unique[referal.femail]',array('is_unique'=>'The provided email has already been invited. Please try another'));
        if($this->form_validation->run() == FALSE)
        {
            //Form validation errors
            $message = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
                'message' => strip_tags(validation_errors())
            );
            $this->response($message,200);
        }
        else{
            //echo json_encode($_POST);exit;
            //echo $to_email;exit;
            //log in database
            $sendEmail = false;
            $isSaved = $this->GenModel->create('referal',$_POST);
            if($isSaved>0){
                $subject = $_POST['rname']." wants you to join ".Utils::siteName;
                $content = "Hi ".$_POST['fname'].", Trust you are having a good day? ".$_POST['rname']." wants you to join ".Utils::siteName."<br><br>At ".Utils::siteName.", ".Utils::siteDesc."<br><br>Please visit our website at <a href='".base_url()."'>".base_url().'</a> to get more information.<br><br>We will be expecting you!';
                //echo $subject;exit;
                $sendEmail = $this->ut->sendEmail($content, $_POST['femail'],$subject,@$reply_to);
            }
            if($sendEmail){
                $status = true;
                $message = "Your referal has been sent. Your friend has been notified";
            }
            else{
                $status = false;
                $message = "Your referal could not be sent. Please try again later";
            }
            $message = ['status'=>$status,'message'=>$message,'content'=>@$content];
            $this->response($message,200);
        }
    }
    public function send_message_post()
    {
        header("Access-Control-Allow-Origin: *");
		$message = [
				'status'=> false,
				'message'=>'Not allowed'
			];
        @Utils::vet($message);
        $userID = Utils::getCurrentUserId();
        $userRec = Utils::getCurrentUserRec();
        if(!empty($_POST))
            $_POST = $this->security->xss_clean($_POST);
        else{
            $_POST = $this->security->xss_clean(Utils::getContents());
        }
        #form validation
        //echo $_POST['type'];exit;
        if($_POST['type']=='email'){
            $this->form_validation->set_rules('title','Email subject','trim|required');
            $this->form_validation->set_rules('message','Message content','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            if($this->form_validation->run() == FALSE)
            {
                //Form validation errors
                $message = array(
                    'status' => false,
                    'error' => $this->form_validation->error_array(),
                    'message' => validation_errors()
                );
                $this->response($message,200);
            }
            $_POST['company_id'] = $userRec->company_id;
            $_POST['type'] = 'm';
            $_POST['user_id'] = $userID;
            //check if the same message does not exist for user
            $found = $this->GenModel->fetch_single(Utils::tblEmail,array('title'=>$_POST['title'],'message'=>$_POST['message'],'customer'=>$_POST['customer']));
            //echo count($found);exit;
            if(count($found)>0){
                //check if it's over an hour
                if($found['status']==1){
                    $diff = time() - strtotime($found['created_date']);
                    $hours = $diff/(60*60);
                    if($hours<1){
                        $status = false;
                        $message = array(
                            'status'=>$status,
                            'message'=>'You sent the same message to the same customer less than an hour ago. You can only resend after an hour is past.'
                        );
                        $this->response($message,200);
                    }
                    else{
                        unset($_POST['id']);
                        $saved = $this->GenModel->create(Utils::tblEmail,$_POST);
                    }
                }
                else{
                    $saved = $found['id'];
                }
            }
            else{
                $saved = $this->GenModel->create(Utils::tblEmail,$_POST);
            }
            if($saved>0){
                //send email
                //get company email
                $sendEmail = @Utils::sendEmail($_POST['message'], $_POST['email'],$_POST['title'],'',$userRec->company_id);
                if($sendEmail && !is_array($sendEmail)){
                    $status = true;
                    $msg = 'Email has been sent to customer';
                    //update sent status
                    $this->GenModel->update(Utils::tblEmail,array('status'=>'1'),array('id'=>$saved));
                }
                else{
                    $status = false;
                    $msg = 'Email could not be sent to customer. Error is: '.$sendEmail['message'];
                }
            }
            else{
                $status = false;
                $msg = 'Email could not be sent to customer';
            }
            $message = ['status'=>$status,'message'=>$msg];
            $this->response($message,200);
        }
        else if($_POST['type']=='sms'){}{
            //remove space from sender id
            //echo json_encode($_POST);exit;
            $_POST['senderID'] = str_replace(' ',' ',$_POST['senderID']);
            $this->form_validation->set_rules('senderID','Sender ID','trim|required');
            $this->form_validation->set_rules('message','Message content','trim|required');
            $this->form_validation->set_rules('phone','Phone number','trim|required');
            if($this->form_validation->run() == FALSE)
            {
                //Form validation errors
                $message = array(
                    'status' => false,
                    'error' => $this->form_validation->error_array(),
                    'message' => validation_errors()
                );
                $this->response($message,200);
            }
            else{
                //check if user has enough credit
                $creditData = $this->GenModel->fetch_single(Utils::tblUnits,array('company_id'=>$userRec->company_id));
                $userCredit = $creditData['credit'];
                if(count($creditData)<=0 || @$userCredit<=0 ){
                    $message = array(
                        'status'=>false,
                        'message'=>'No sms settings or credit found in your account'
                    );
                    $this->response($message,200);
                }
                $recipients = trim($_POST['phone'],',');
                $_POST['company_id'] = $userRec->company_id;
                unset($_POST['phones']);
                unset($_POST['msg']);
                $_POST['user_id'] = $userID;
                $_POST['type'] = 'm';
                $_POST['sms'] = $_POST['message'];
                unset($_POST['message']);
                //before saving find out if data exists already
                $found = $this->GenModel->fetch_single(Utils::tblSMS,array('customer'=>$_POST['customer']));
                if(count($found)<=0){
                    $saved = $this->GenModel->create(Utils::tblSMS,$_POST);
                }
                else{
                    //check if last sent is more than hours
                    if($found['status']==1){
                        $diff = time() - strtotime($found['created_date']);
                        $hours = $diff/(60*60);
                        if($hours<1){
                            $status = false;
                            $message = array(
                                'status'=>$status,
                                'message'=>'You sent the same message to the same numbers less than an hour ago. In order to secure your units, you can only resend after an hour is past.'
                            );
                            $this->response($message,200);
                        }
                        else{
                            unset($_POST['id']);
                            $saved = $this->GenModel->create(Utils::tblSMS,$_POST);
                        }
                    }
                    else{
                        $saved = $found['id'];
                    }
                }
                if($saved>0){
                    $msgText = $_POST['sms'];
                    //check number of pages and number of recipients
                    $pages = strlen($msgText)/160;
                    //echo strlen($msgText)%160;
                    if(strlen($msgText)%160>0)
                    {
                        $pages = $pages+1;
                    }
                    $pages = floor($pages);
                    $units = $pages * count($recipients);
                    $smsSettings = @Utils::smsData($userRec->company_id);
                    $username = $smsSettings['username'];
                    $password = $smsSettings['pwd'];
                    $smsUserID = $userID = $smsSettings['user_id'];
                    if($userCredit && $userCredit!=""){
                        if($units>=$userCredit){
                            $status = false;
                            $msg = "Insufficient credit. SMS could not be sent to ".count($recipients)." numbers. ".$units." SMS units required";
                        }
                        else{
                            $removeCredit = $this->GenModel->updateBool(Utils::tblUnits,'credit','credit-'.$units,array('company_id'=>$userRec->company_id),FALSE);
                            if($removeCredit>0){
                                //@Utils::newSMS($phone,$senderID,$sms,$username,$password,$smsUserID,1);
                                $sendID = @Utils::newSMS($recipients,$_POST['senderID'],$msgText,$username,$password,$smsUserID,1);
                            }
                            else{
                                $sendID = 'debt';
                            }
                            if($sendID>0){
                                $status = true;
                                $msg = "SMS has been sent to customer";
                                //update message status
                                $this->GenModel->update(Utils::tblSMS,array('status'=>'1','units'=>$units),array('id'=>$saved));
                                $_POST['user_id'] = $smsUserID;
                                $_POST['status'] = '1';
                                $_POST['units'] = $units;
                                @Utils::removeCredit($units,$smsUserID,$_POST);
                            }
                            else if($sendID=='debt'){
                                $status = false;
                                $msg = "SMS could not be sent to customer. We could not remove your credits to send SMS.";
                                $restoreCredit = $this->GenModel->updateBool(Utils::tblUnits,'credit','credit+'.$units,array('company_id'=>$userRec->company_id),FALSE);
                            }
                            else{
                                $restoreCredit = $this->GenModel->updateBool(Utils::tblUnits,'credit','credit+'.$units,array('company_id'=>$userRec->company_id),FALSE);
                                $status = false;
                                $msg = "SMS could not be sent to customer. Error Code: ".@$sendID.". Please contact system administrator!";
                            }
                        }
                        //remove units from account
                    }
                    else{
                        $status = false;
                        $msg = "No credit record is found in your account. SMS could not be sent to ".count($recipients)." numbers.";
                    }
                    $userCredit = $this->GenModel->fetch_single(Utils::tblUnits,array('company_id'=>$userRec->company_id))['credit'];
                }
                else{
                    $status = false;
                    $msg = "SMS attempt failed. Please try again!";
                }
            }
            if(!$userCredit)
                $userCredit = 0;
            $message = array(
                'status'=>$status,
                'message'=>$msg." ".@$diff,
                'credit'=>$userCredit,
                'smsSendID'=>@$sendID
            );
        }
        $this->response($message,200);
    }
}