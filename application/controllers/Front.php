<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller{
    /**
     * Load the construct 
    */
    public function __construct()
    {
        parent::__construct();   
		$this->load->helper(array("url",'text'));
        $this->ut = (new Utils);
        $this->ut->isWWW();
    }
    public function index()
    {
        $var['meta_title'] = @Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = @Utils::siteDesc;
        $var['keywords'] = @Utils::siteName.", stucco paints in nigeria, alternative stucco paint,  ".Utils::keywords;
        $var['hm'] = "active";
        $var['whyArr'] = $this->GenModel->fetch_multi(Utils::tblCMS,array('name'=>'why'),'','id ASC');
        $var['home_icons'] = count($var['whyArr']);
        $var['feeds'] = $this->GenModel->fetch_multi(Utils::tblCMS,array('name'=>'feed'),'','id ASC');
        $this->load->view(@Utils::Dir.'index',$var);
    }
    public function donate($term=NULL){
        $url = Utils::appUrl;
        if(strpos(current_url(),'localhost')>0)
         $url = 'http://localhost:8100/';
        //echo $url;exit;
        header('Location: '.$url.'donate/'.$term);
    }
    public function payment_completed($txRef=NULL){
        if($txRef){
            //update tax ref
            $this->GenModel->update(Utils::tblTrans,array('status'=>'completed'),array('reference_no'=>$txRef));
        }
        $this->load->view('front/close');
    }
    public function donations($txRef=NULL){
        $url = Utils::appUrl;
        if(strpos(current_url(),'localhost')>0)
            $url = 'http://localhost:8100/';
        if($txRef){
            //redirect to donation page in app
            header('Location: '.$url.'/sponsorships/'.$txRef);
        }
    }
    public function about()
    {
        $var['meta_title'] = "About - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = Utils::siteDesc;
        $var['keywords'] = "about ".@Utils::siteName.Utils::keywords;
        $var['ab'] = "active";
        $this->load->view(@Utils::Dir.'about',$var);
    }
    public function refer()
    { 
        $var['meta_title'] = "Refer - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'Refer a friend for rewards';
        $var['keywords'] = "refer a friend ".@Utils::siteName.Utils::keywords;
        $var['loan'] = "active";
        $this->load->view(@Utils::Dir.'refer',$var);
    }
    public function offers()
    {
        $var['meta_title'] = "Our Offers - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'What we are offering';
        $var['keywords'] = "offers ".@Utils::siteName.Utils::keywords;
        $var['offer'] = "active";
        $this->load->view(@Utils::Dir.'offers',$var);
    }
    public function faqs()
    {
        $var['meta_title'] = "FAQs - ".@Utils::siteName.' -'.Utils::tagName;
        $var['meta_description'] = 'Frequently asked questions';
        $var['keywords'] = "faq ".@Utils::siteName.Utils::keywords;
        $var['support'] = "active";
        $var['faqArr'] = $this->GenModel->fetch_multi('faqs',array('type'=>'student'));
        $var['faqUni'] = $this->GenModel->fetch_multi('faqs',array('type'=>'uni'));
        $var['faqRole'] = $this->GenModel->fetch_multi('faqs',array('type'=>'model'));
        $var['faqPhil'] = $this->GenModel->fetch_multi('faqs',array('type'=>'phil'));
        $this->load->view(@Utils::Dir.'faq',$var);
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
    public function contact()
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
        $this->load->view(@Utils::Dir.'ct',$var);
    }
    public function gallery()
    {
        $var['meta_title'] = "Gallery - ".@Utils::siteName;
        $var['meta_description'] = @Utils::siteDesc;
        $var['keywords'] = "gallery ".@Utils::siteName.", picture displays of ".@Utils::siteName.Utils::keywords;
        $var['gal'] = "active";
        /*$hm = $var['home'] = $this->GenModel->fetch_multi(Utils::tblCMS,array('name'=>'home'));
        $data2 = [];
        foreach($hm as $d){
            $data2[$d->name] = $d->value;
            $data2[$d->sub_name] = $d->value;
        }
        //echo json_encode($data2['lead']);exit;
        $var['home'] = $data2;*/
        $this->load->view(@Utils::Dir.'gallery',$var);
    }
    /**
     * open modal templates
     */
    public function modal($template){
        //echo $template;
        $this->load->view('front/templates/'.$template);
    }
    public function views($template){
        //echo $template;
        $this->load->view('front/templates/'.$template.'.html');
    }
    public function _404(){
		$var['meta_title'] = "404 - Page Not Found";
		$this->load->view(@Utils::Dir.'error_404',$var);
	}
}