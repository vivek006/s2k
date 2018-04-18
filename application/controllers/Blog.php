<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Frontend_Controller {

	public function index()
	{	
		$this->middle="blog/home";
		$this->layoutBlog();	
	}

}