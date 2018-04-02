<?php
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // do some stuff
    }
}

class MY_Frontend_Controller extends MY_Controller
{
	var $template  = array();
	var $data      = array();   
    function __construct()
    {
		parent::__construct();	
			/*$this->load->model('admin_model');
			$lastActivity=$this->session->userdata("last_activity");
		if($lastActivity!=NULL)
		{
			$response=$this->checkSessionExpiry();	
		}	
			$response=$this->updateLastActivity();	*/
	}
	
	public function layout()
	{
     // making temlate and send data to view.
    /* $this->template['header']   = $this->load->view('common/layout/header', $this->data, true);
     $this->template['left']   = $this->load->view('common/layout/leftmenu', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('common/layout/footer', $this->data, true);
	 $this->template['cssfile'] = $this->load->view('common/layout/cssfile', $this->data, true);
	 $this->template['jsfile'] = $this->load->view('common/layout/jsfile', $this->data, true);
	 $this->load->view('common/layout/index', $this->template);*/
   }
   	
 // function getLatLong()
 //   {
	//  if($this->admin_model->checkSessionExpiry())
	// 	{	  
	// 		$this->updateLastActivity();
	// 		$array_items = array('admin_userid' => '', 'admin_username' => '','validated'=>'');
	// 		$this->session->unset_userdata($array_items);
	// 		$data=array("logoutmsg"=>'<p>Your session is expired.</p>');
	// 		$this->session->set_userdata($data);	
	// 		$this->load->view("admin/layout/login");	
	// 	} 
 //   }  
  
public function layoutFront()
	{
     // making temlate and send data to view.
     $this->template['head_script']   = $this->load->view('front/layout/common/head_script', $this->data, true);
     $this->template['nav_bar']   = $this->load->view('front/layout/common/nav_bar', $this->data, true);
     $this->template['slider']   = $this->load->view('front/layout/common/slider', $this->data, true);
     $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
     $this->template['footer'] = $this->load->view('front/layout/common/footer', $this->data, true);
	 $this->template['body_script'] = $this->load->view('front/layout/common/body_script', $this->data, true);
	 $this->template['jsfile'] = $this->load->view('common/layout/jsfile', $this->data, true);
	 $this->load->view('front/layout/common/index', $this->template);
   }      
}
?>