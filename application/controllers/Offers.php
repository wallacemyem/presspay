<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function index()
    {
        $var['meta_title'] = "Our Offers - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'What we are offering';
        $var['keywords'] = "offers ".@Utils::siteName.Utils::keywords;
        $var['offer'] = "active";
        $this->load->view(@Utils::Dir.'our_offers',$var);
    }

}