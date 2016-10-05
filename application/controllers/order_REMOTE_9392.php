<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('user_id'))) {
            redirect(base_url().'admin/login');
        }
    }
	
	public function index()
	{
	
		redirect(base_url().'admin/order/order_list');
			
	}
	
	public function orderList()
	{
			$this->load->view('admin/order/order_list');
		
	}
}
