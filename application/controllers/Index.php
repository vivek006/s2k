<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Admin_Controller {

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
	
}