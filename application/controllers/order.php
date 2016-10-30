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
		$sql='select o.OrderId,c.Name,m.MenuName,o.Quantity,o.PaymentMethod,o.PaymentCycleMethod,o.Status,o.DaysofWeek,o.StartDate,o.ReceivedDate,o.LastUpdatedDate,o.DueDate from orders o join customers c on o.CustomerId=c.CustomerID join menu m on m.menuID= o.MenuId';
			$result=$this->Common_Model->execute_exact_string($sql);
			$data['orders']=$result;
			$this->load->view('admin/order/order_list',$data);
		
	}
	public function addOrderDetails($order_id)
	{
		
		$this->load->view('admin/order/add_order_details');
		
		
		
	}
}
