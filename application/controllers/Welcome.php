<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//$msg=array();
		
		$result=$this->Common_Model->find('chefs', '*');
		$data['results']=$result;
		$this->load->view('CaptainFood/home',$data);		
	}
	public function menu($ChefID=0)
	{
		//$msg=array();
		
		//$result=$this->common_model->find('chefs', '*');
		//$data['results']=$result;
		if($ChefID)
		{
			$where['ChefID']=$ChefID;
			$result=$this->Common_Model->find('menu', '*',$where);
			$data['results']=$result;
			$this->load->view('CaptainFood/menu',$data);		
		}
	}
}
