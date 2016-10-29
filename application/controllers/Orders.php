<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {
	public function index()
	{
			echo 'helloo';die;	
	}
	
	public function neworder($ChefID=0,$menuID=0)
	{
			//Featured Chefs
		$Ftchefs=$this->Common_Model->find('chefs', '*',array('IsFeatured','1'));
		$data['ftchefs']=$Ftchefs;
			
			$menu['menuID']=$menuID;
			$where['ChefID']=$ChefID;
			$chefs=$this->Common_Model->find('chefs', '*',$where);
			$data['chef']=$chefs;
			$result=$this->Common_Model->find('menu', '*',$menu);
			$data['results']=$result;
			
			$this->load->view('CaptainFood/OrderNow',$data);
	}
	
	public function SendOrder()
	{
		
		
		$msg =  'Name: '.$_POST['name'] ."\n";
		$msg.=	'Email: '.$_POST['email'] ."\n";
		$msg.=	'Phone: '.$_POST['phone'] ."\n";
		$msg.=	'Address: '.$_POST['address'] ."\n";
		$msg.=	'Chef Name: '.$_POST['chefName'] ."\n";
		$msg.=	'Menu: '.$_POST['menu'] ."\n";
		$msg.=	'Start Date: '.$_POST['StartDate'] ."\n";
		$msg.=	'Duration: '.$_POST['duration'] ."\n";
		$msg.=	'Quantity: '.$_POST['Quantity'] ."\n";

		
		$Subject='CaptainFood Orders';
		mail('m.osamamanzoor@gmail.com', $Subject, $msg );
	}
	
}