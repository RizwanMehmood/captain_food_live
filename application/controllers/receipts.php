<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receipts extends CI_Controller {
	
	public function index()
	{
		redirect(base_url());
			
	}
	
	public function print_receipt($receiptNo)
	{
		$x=0;
		$sql="CALL `Print_Reciept`('".$receiptNo."');";
		$result=$this->Common_Model->execute_exact_string($sql);
		$data['result'] = $result;
		
		$this->load->view('CaptainFood/invoice',$data);
	}
	
}
