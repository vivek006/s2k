<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Frontend_Controller {

	public function index()
	{	

		// $sql = "SELECT * FROM `blog` a JOIN `shipment` s ON (a.`shipment_id` = s.`shipment_id`) JOIN `order` o ON (s.`order_id` = o.`order_id`) WHERE a.`tracking_no` = '$awb_code' AND a.`manual` = 0 AND s.`shipment_status_id` < 5 AND o.`order_status_id` < 8";
		// $query = $this->db->query($sql);

		// return $query->result_array();
		$this->middle="blog/home";
		$this->layoutBlog();	
	}

}