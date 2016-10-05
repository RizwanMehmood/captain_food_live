<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function index()
	{
		if(($this->session->userdata('user_id')))
			redirect(base_url().'admin/dashboard');
		else
		redirect(base_url().'admin/login');		
	}
	public function login()
	{
		if(($this->session->userdata('user_id')))
			redirect(base_url().'admin/dashboard');
		else{
			if($this->input->post())
			{
					$where = array();
					$where=$this->input->post(); 
					$result=$this->common_model->find('user','*', $where);
					if($result)
					{
						$this->session->set_userdata($result[0]);
						redirect(base_url().'admin/dashboard');
					}
					else
					{
						
						$this->session->set_flashdata('error_message','Username or Password is incorrect');
						redirect(base_url().'admin/login');
					}
			}
			else
			{
				$this->load->view('admin/login');
			}
		}
				
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin/login');
	}
	public function dashboard()
	{
		
		if($this->session->userdata('user_id'))
		{
			$this->load->view('admin/dashboard');
		}
	else
	{
		redirect(base_url().'admin/login');
	}
		
	}
}
