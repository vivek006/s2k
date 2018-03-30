<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlinetutoring extends MY_Admin_Controller {

	public function index()
	{
		$this->load->view('onlinetutoring/index');
	}
	public function php()
	{
		$this->load->view('onlinetutoring/php/index');
	}
	public function basic_php()
	{
		$this->load->view('onlinetutoring/php/php_basics');
	}
	public function instalation()
	{
		$this->load->view('onlinetutoring/php/instalation');
	}
	public function advance_php()
	{
		$this->load->view('onlinetutoring/php/frmaework/index');
	}
	public function installaravel()
	{
		$this->load->view('onlinetutoring/php/frmaework/laravel/instalation');
	}
}
