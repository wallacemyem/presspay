<?php

/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 8/8/2016
 * Time: 9:56 AM
 */
class AuthSvc
{
    private $key;

    public function decode()
    {
        $this->key = base64_encode("u60tickets");
        $CI = &get_instance();
//        $controller = $CI->router->fetch_class();
        if (@$CI->isHookable) {
            $header = getallheaders();
            if (isset($header["Authorization"])) {
                $token = sscanf($header['Authorization'], "Bearer %s")[0];
                try {
                    JWT::decode($token, $this->key, array('HS512'));
                } catch (Exception $ex) {
                    return http_response_code(401);
                }
            } else {
                return http_response_code(401);
                //echo 'Yes';
            }
        }

    }
}