<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chef extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('user_id'))) {
            redirect(base_url().'admin/login');
        }
    }
	
	public function index()
	{
	
		redirect(base_url().'admin/chef/chef_list');
			
	}
	
	public function chefList()
	{
			$result=$this->common_model->find('chefs', '*');
			$data['chefs']=$result;
			$this->load->view('admin/chef/chef_list',$data);
		
	}
}
