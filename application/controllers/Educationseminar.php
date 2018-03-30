<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educationseminar extends MY_Admin_Controller {

	public function index()
	{
						/*
						$email='vivekranjan006@gmail.com';
						$this->load->library('email');
						//$this->email->initialize($config);
						$this->email->set_newline("\r\n");
						$this->email->set_mailtype("html");
						$this->email->from('info@votesocracy.com', 'Votesocracy');
						$this->email->to($email);
						$this->email->subject('Votesocrac Password');
						$datamail["username"] = 'vivekranjan';
						$datamail["content0"] ='Find your password below';
						$datamail["content1"] ='Password: ';
						$html = $this->load->view('common/email_templet', $datamail, true);							
						$this->email->message($html);
						if($this->email->send())
						{
							echo 'coming soon';							
							
						}
						else
						{
							echo 'error ocurrs';
						}
						*/
						$this->load->view('seminar/index');
		
	}
}
