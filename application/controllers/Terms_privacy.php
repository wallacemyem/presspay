<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_privacy extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function privacy()
    {
        $var['meta_title'] = "Privacy - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'Privacy policy';
        $var['keywords'] = "privacy ".@Utils::siteName.Utils::keywords;
        $var['support'] = "active";
        $this->load->view(@Utils::Dir.'privacy',$var);
    }
    public function terms()
    {
        $var['meta_title'] = "Terms of Service - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'Terms of service';
        $var['keywords'] = "terms of service ".@Utils::siteName.Utils::keywords;
        $var['support'] = "active";
        $this->load->view(@Utils::Dir.'terms',$var);
    }
    
}