<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Frontend_Controller {

	public function index()
	{	
			$this->middle="front/layout/content";
			$this->layoutFront();	
	}

	public function faq()
	{
			$this->middle="front/layout/faq/content";
			$this->layoutFront();	
	}

	public function tnc()
	{
			$this->middle="front/layout/terms/content";
			$this->layoutFront();	
	}

	
	public function submit_form()
	{
		$f_name=$_REQUEST['first_name'];
		$l_name=$_REQUEST['last_name'];
		$email=$_REQUEST['email'];
		$message=$_REQUEST['message'];		
		
		$this->load->library('email');
		//$this->email->set_newline("\r\n");
		$this->email->set_mailtype("html");
		$this->email->from('vivek.ranjan@s2know.com', 'Vivek Ranjan');
		$this->email->to('vivekranjan006@gmail.com');  
		//$this->email->bcc('anil.yadav@actiknow.com'); 
		$this->email->subject('s2know lead mail :');
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