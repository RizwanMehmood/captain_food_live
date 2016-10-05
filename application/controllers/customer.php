<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('user_id'))) {
            redirect(base_url().'admin/login');
        }
    }
	
	public function index()
	{
	
		redirect(base_url().'admin/customer/customer_list');
			
	}
	
	public function customerList()
	{

			$result=$this->common_model->find('customers', '*');
			$data['customers']=$result;
			$this->load->view('admin/customer/customer_list',$data);

	}
}
