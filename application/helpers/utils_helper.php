<?php 
/** created by Timothy */
class Utils{
    const key = "vp";
    const sk = '';
    const servername = "https://presspay.ng";
    //const link = "http://localhost/pyramid/activate?key=";
    const link = "https://presspay.ng/activate?key=";
    const ttl = 5184000;//86400; //1440 minutes
    const subDir = "frontend/layout/";
    const Dir = "frontend/";
    const front = "index.html#/";
    const siteName = "PressPayNg";
    const tagName = "Students Loan up to 50%";
    const siteDesc = "We help co-fund your tuition year after year till you graduate giving you a short-term soft loan to facilitate the prompt payment of your tuition fees per academic calendar.";
    const keywords = ", student loan in nigeria, presspay.ng, presspayng";
    const domain = "presspay.ng";
    //tables
    const tblAdmin = 'tbl_admin';
    const tblSMS = 'tbl_sms';
    const tblSMSSettings = 'tbl_sms_settings';
    const tblUnits = 'tbl_units';
    const tblState = 'tbl_states';
    const tblProfile = 'tbl_profile';
    const tblCMS = 'tbl_cms';
    const appUrl = '//app.presspay.ng/';
    const tblActivate = true;
    

    //mock
    const tblCand = 'candidates';
    const tblWallet = 'wallets';
    const tblInst = 'institutions';
    const tblWalletH = 'wallet_histories';
    const tblTrans = 'tbl_transactions';
    const tblHooks = 'tbl_hooks';
    const tblUser = 'users';


    public function cid(){
        $userData = Utils::getCurrentUserRec();
        return $userData->id;
    }
    public function checkPermission($level){
        $userData = Utils::getCurrentUserRec();
        if($userData->level>=$level){
            return true;
        }
        else{
            @Utils::setResponse2(false,'Access denied');
        }
    }
    public function date(){
        return date('Y-m-d H:i:s');
    }
    public function empty2(){
        Utils::setResponse2(false,'Input data is empty. Process aborted.');
    }
    public function compArr(){
        return ['company_id'=>Utils::cid()];
    }
    public function filterArray($array,$id,$term){
        for($i=0; $i<=count($array); $i++){
            if($array[$i]->{$term}==$id){
                return $array[$i];
            }
        }
    }
    public static function getContents()
    {
        return json_decode(file_get_contents("php://input"), true);
    }
    public static function generateToken($user_data)
    {
        $issuedAt = time();
        $notBefore = $issuedAt;             //configure the time token is active from issued time
        $expire = $notBefore + Utils::ttl;
        $key = base64_encode(Utils::key);
        $data = array(
            'iat' => $issuedAt,         // Issued at: time when the token was generated
            'jti' => $key,          // Json Token Id: an unique identifier for the token
            'iss' => Utils::servername,       // Issuer
            'nbf' => $notBefore,        // Timestamp of when the token should start being considered valid.
            // Should be equal to or greater than iat.
            'exp' => $expire,           // Expire
            'data' => $user_data
        );
        return JWT::encode($data, $key, 'HS512');
    }
    public static function setResponse($message, $statusCode)
    {
        $message = array('message'=>$message,'status'=>$statusCode);
        return json_encode($message);
    }
    public static function setResponse2($status, $message, $statusCode=NULL)
    {
        $ci =& get_instance();
        if(!$statusCode)
            $statusCode = 200;
        $message = array('message'=>$message,'status'=>$status);
        $ci->response($message,$statusCode);
    }
    public static function setResponse3($status, $message, $statusCode,$data)
    {
        $ci =& get_instance();
        $message = array('message'=>$message,'status'=>$status,'data'=>$data);
        $ci->response($message,$statusCode);
    }
    public static function encodePassword($password)
    {
        return sha1(md5(base64_encode($password)));
    }
    public function sendEmail($content, $to_email,$subject, $reply_to = NULL,$attachment=NULL)
    {
        $ci =& get_instance();
        $config['useragent']        = 'CodeIgniter';  
        $config['protocol']         = 'smtp';
        $config['smtp_host']        = 'mail.presspay.ng';
        $config['smtp_port']        = '587';
        $config['smtp_user']        = 'no-reply@presspay.ng	';
        $config['smtp_pass']        = 'Secure2021@';
        $config['wordwrap']         = TRUE;
        $config['smtp_timeout']     = 5;
        $config['wrapchars']        = 76;
        $config['charset']          = 'utf-8';
        $config['crlf']             = "\r\n";
        $config['validate']         = FALSE;
        $config['mailtype']         = 'html';
        $config['priority']         = '3';
        $config['newline']          = "\r\n"; 
        //echo json_encode($config);exit;
        
        $from_email = 'noreply@'.Utils::domain;
        if($reply_to!="" || $reply_to!=NULL){
            $from_email = $reply_to;
        }
        $logo = $ci->config->base_url().'public/images/logo-dark.png';
        $name = Utils::siteName;
        @$message = "<html>
                    <head>
                        <style>
                            a{color:#777; text-decoration: none}
                            a:hover{text-decoration: underline; color:#fff}
                            .footer a{color:#424242}
                            .footer img{}
                            .border{border:solid 1px}
                            .nopad{padding:0; margin:0}
                        </style>
                    </head>
                    <body>
                    <div style='overflow: hidden;width:90%; min-height: 60px; max-width:900px; margin:0 auto; font-family: Tahoma; line-height: 20px; border:solid 1px #eee'>
                        <div style='width:100%; min-height:30px;background: #f8f8f8; color:#fff; padding:10px; text-align:center'>
                            <p align='center'>
                                <img src='" . @$logo . "' alt='".Utils::siteName."' style='max-width:50%; max-height:100px'>
                            </p>
                        </div>
                        <div style='background:#fff'>
                            <p style='font-size:12px; text-align: justify;padding:10px'>" . nl2br($content) . "</p>
                        </div>
                        <div style='width:100%; min-height:70px; background:#142454; padding-top:20px; font-size:12px; color:#fff;text-align:center'>
                                <p>".Utils::siteName."<sup>&reg;</sup> &copy; ".date('Y').". All Rights Reserved</p>
                                <p><a href='mailto:hello@".Utils::domain."'>e: hello@".Utils::domain."</a></p>
                        </div>
                    </div>
                    </body>
                    </html>
                    ";
        //Load email library
        $ci->load->library('email');
        $ci->email->initialize($config);
        $ci->email->from($from_email, $name);
        $ci->email->to($to_email);
        $ci->email->bcc('timothy.programmer@gmail.com');
        $ci->email->subject($subject);
        $ci->email->message($message);
        if($attachment)
            $ci->email->attach($attachment);
        $ci->email->set_mailtype("html");
        //Send mail
        if (@$ci->email->send())
            return true;
        else{
            return ['status'=>false,'message'=>$ci->email->print_debugger()];
        }

    }
    public static function getCurrentUserId()
    {
        $header = getallheaders();
        if(!isset($header["Animal"]) && isset($header["animal"]))
            $header["Animal"] = $header["animal"];
        if (isset($header["Animal"])) {
            $token = sscanf($header['Animal'], "Bearer %s")[0];
            $encoded_key = base64_encode(Utils::key);
            try {
                $decoded = JWT::decode($token, $encoded_key, array('HS512'));
                return $decoded->data->id;
            } catch (Exception $ex) {
                return http_response_code(401);
            }
        } else {
            return false;
        }
    }
    public static function getCurrentUserIdToken($token)
    {
        $header = getallheaders();
        if($token){
            $encoded_key = base64_encode(Utils::key);
            try {
                $decoded = JWT::decode($token, $encoded_key, array('HS512'));
                return $decoded->data->id;
            } catch (Exception $ex) {
                return http_response_code(401);
            }
        }
        else {
            return false;
        }
    }
    public static function getToken()
    {
        $header = getallheaders();
        if(!isset($header["Animal"]) && isset($header["animal"]))
            $header["Animal"] = $header["animal"];
        if (isset($header["Animal"])) {
            return $token = sscanf($header['Animal'], "Bearer %s")[0];
        } else {
            return false;
        }

    }
    public static function getCurrentUserRec()
    {
        $header = getallheaders();
        if(!isset($header["Animal"]) && isset($header["animal"]))
            $header["Animal"] = $header["animal"];
        if (isset($header["Animal"])) {
            $token = sscanf($header['Animal'], "Bearer %s")[0];
            $encoded_key = base64_encode(Utils::key);
            try {
                $decoded = JWT::decode($token, $encoded_key, array('HS512'));
                return $decoded->data;
            } catch (Exception $ex) {
                return http_response_code(401);
            }
        } else {
            return false;
        }
    }
    public static function getCurrentUserRecToken($token)
    {
        if($token) {
            $encoded_key = base64_encode(Utils::key);
            try {
                $decoded = JWT::decode($token, $encoded_key, array('HS512'));
                return $decoded->data;
            } catch (Exception $ex) {
                return http_response_code(401);
            } 
        } else {
            return false;
        }
    }
    public static function getCurrentUserData($token)
    {
        $encoded_key = base64_encode(Utils::key);
        $decoded = JWT::decode($token, $encoded_key, array('HS512'));
        return $decoded->data;
    }
    public function urlForm($text)
	{
		return preg_replace("/[\s_:.$@;,]/", "-", $text);
    }
    public function getUserData(array $where){
        $ci =& get_instance();
        $ci->load->model('GenModel');
        if(is_array($where))
            $data = $ci->GenModel->fetch_single(Utils::tblUser,$where);
            unset($data['password']);
            return $data;
    }
    public function isMobile(){
        $CI =& get_instance();
        $CI->load->library("user_agent");
        if($CI->agent->is_mobile()){
            return true;
        }
		else
			return false;
    }
    public function cors2(){
        //if(isset($_SERVER['HTTP_ORIGIN']))
            //header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Expose-Headers: Authorization');
        header('Access-Control-Allow-Credentials: true');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, authorization, Animal');
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS')
            die();
    }
    public function vet($message){
        $header = getallheaders();
        //echo json_encode($header['animal']);exit;
        //echo json_encode($header['animal']);exit;
        $ci =& get_instance();
        if(!$header["Animal"] && $header["animal"])
            $header["Animal"] = $header["animal"];
            if (isset($header["Animal"])) {
                $token = sscanf($header['Animal'], "Bearer %s")[0];
                $encoded_key = base64_encode(Utils::key);
                try {
                    JWT::decode($token, $encoded_key, array('HS512'));
                } catch (Exception $ex) {
                    return $ci->response($ex, 401);
                }
            } else {
                return $ci->response($message, 401);
            }
    }
    public function vetToken($message,$token){
        $header = getallheaders();
        $ci =& get_instance();
        if($token){
            $encoded_key = base64_encode(Utils::key);
            try {
                JWT::decode($token, $encoded_key, array('HS512'));
            } catch (Exception $ex) {
                return $ci->response($ex, 401);
            }
        }
        else {
            return $ci->response($message, 401);
        }
    }
    public function generateCode($tbl,$where,$code)
	{
        $ci =& get_instance();
        $ci->load->model('GenModel');
		while(!empty($ci->GenModel->fetch_single($tbl,$where))){
			$code = rand(100002,999999);
        }
        return $code;
    }
    public function isHTTPS(){
        if($_SERVER['REQUEST_SCHEME']=='http')
            return false;
        else
            return true;
    }
    public function isWWW(){
        if (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') {
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: http://' . substr($_SERVER['HTTP_HOST'], 4).$_SERVER['REQUEST_URI']);
            exit;
            //break;
        }
    }
    public function nf($number,$decimals){
        return number_format($number, $decimals, '.', '');
    }
    public function tf($date){
        if($date)
        return date('d/m/Y h:i a',strtotime($date));
    }
    public function df($date){
        if($date)
        return date('Y-m-d H:i:s',strtotime($date));
    }
    public function df2($date){
        if($date)
        return date('Y-m-d 00:00:00',strtotime($date));
    }
    public function formatDateSlash($date){
        return date('Y/m/d',strtotime($date));
    }
    public function decrypt($string, $key=NULL) {
        return base64_decode($string);   
    }
    public function encrypt($string, $key=NULL) {
        return base64_encode($string);
    }

    
}