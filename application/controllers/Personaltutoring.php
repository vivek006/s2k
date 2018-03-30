<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personaltutoring extends MY_Admin_Controller {

	public function index()
	{
		$this->load->view('knowledgesharing/index');
	}
}
