<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Refer extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function index()
    {
        $var['meta_title'] = "Refer - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'Refer a friend for rewards';
        $var['keywords'] = "refer a friend ".@Utils::siteName.Utils::keywords;
        $var['loan'] = "active";
        $this->load->view(@Utils::Dir.'refer',$var);
    }

}