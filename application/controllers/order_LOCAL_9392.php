<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
	
	public function index()
	{
		redirect(base_url().'order/orderList');		
	}
	public function orderList()
	{
		$this->load->view('admin/order/order_list');
	}
}
