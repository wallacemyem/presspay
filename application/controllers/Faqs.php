<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }

    public function index(){
        $var['meta_title'] = "FAQs - ".@Utils::siteName.' - '.Utils::tagName;
        $var['meta_description'] = 'Frequently asked questions';
        $var['keywords'] = "faq ".@Utils::siteName.Utils::keywords;
        $var['support'] = "active";
        $var['list'] = $this->GenModel->fetch_all(array('types_faqs'));
        $var['faqArr'] = $this->GenModel->fetch_multi('faqs',array('type'=>'student'));
        $var['faqUni'] = $this->GenModel->fetch_multi('faqs',array('type'=>'uni'));
        $var['faqRole'] = $this->GenModel->fetch_multi('faqs',array('type'=>'model'));
        $var['faqPhil'] = $this->GenModel->fetch_multi('faqs',array('type'=>'phil'));
        $this->load->view(@Utils::Dir.'faqs',$var);
    }

}