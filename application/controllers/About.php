<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function index(){
        $var['meta_title'] = "About - ".@Utils::siteName.' - '.Utils::tagName;
        $var['meta_description'] = Utils::siteDesc;
        $var['keywords'] = "about ".@Utils::siteName.Utils::keywords;
        $var['ab'] = "active";
        $this->load->view(@Utils::Dir.'about_us',$var);
    }

}