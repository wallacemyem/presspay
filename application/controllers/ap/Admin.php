<?php defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Admin extends REST_Controller{
    private $key;
    public function __construct(){
        parent:: __construct();
        $this->load->model(array('GenModel'));
        $this->key = Utils::key;
        @Utils::cors2();
        
    }
}