<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Frontend_Controller {

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
	
}