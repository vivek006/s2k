<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Admin_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$this->middle="front/layout/content";
			$this->layoutFront();	
	}
	
	function submit_form()
	{
		$f_name=$_REQUEST['first_name'];
		$l_name=$_REQUEST['last_name'];
		$email=$_REQUEST['email'];
		$message=$_REQUEST['message'];		
		
		$this->load->library('email');
		//$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from('vivek.ranjan@delivernature.com', 'Vivek Ranjan');
		$this->email->to('vivekranjan006@gmail.com');  
		//$this->email->bcc('anil.yadav@actiknow.com'); 
		$this->email->subject('my deliver nature jobs:');
		$datamail["username"] = $f_name.'-'.$l_name;
		$datamail["email"]=$email;
		$datamail["msg"] ='message for you : '.$message;
		$html = $this->load->view('common/email_templet', $datamail, true);							
		$this->email->message($html);
		//$this->email->message('Dear Student, we have got your payment');	
		//$this->email->send();
		if($this->email->send())
		{
			//echo 'sent';
			//exit;
		}
		else
		{
			//echo 'error';
			//EXIT;
		}
		$this->middle="front/layout/content";
		$this->layoutFront();
		
		//---------****end of code for mail-------//
		
	}
}