<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function index()
    {
        $var['meta_title'] = "Contact - ".@Utils::siteName;
        $var['meta_description'] = @Utils::siteDesc;
        $var['keywords'] = "contact ".@Utils::siteName.", address and location of ".@Utils::siteName.Utils::keywords;
        $var['ct'] = "active";
        /*$hm = $var['home'] = $this->GenModel->fetch_multi(Utils::tblCMS,array('name'=>'home'));
        $data2 = [];
        foreach($hm as $d){
            $data2[$d->name] = $d->value;
            $data2[$d->sub_name] = $d->value;
        }
        //echo json_encode($data2['lead']);exit;
        $var['home'] = $data2;*/
        $this->load->view(@Utils::Dir.'contact',$var);
    }

}