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
		$odata=array(); //Order data for insertion in orders table
		$cdata=array(); //Customer data to insert customer if does not exist
		$cID=0;
		
		$where['Contact']=$_POST['phone'];
		$where['Email']=$_POST['email'];
		$result=$this->Common_Model->find('customers','CustomerID',$where);
		$cID=$result[0]['CustomerID'];
		if(!$cID) //if customer does not exist then insert customer
		{
			$cdata['Name']=$_POST['name'];
			$cdata['Contact']=$_POST['phone'];
			$cdata['Email']=$_POST['email'];
			$cdata['Address']=$_POST['address'];
			$cID=$this->Common_Model->save('customers',$cdata);
		}
		$odata['MenuId']=$_POST['menuId'];
		$odata['Quantity']=$_POST['Quantity'];
		$odata['PaymentMethod']='Cash on delivery';
		$odata['PaymentCycleMethod']='Daily';
		$odata['Status']='New Request';
		$odata['DeliveryTime']=$_POST['delivertime'];
		$odata['StartDate']=$_POST['StartDate'];
		$odata['ReceivedDate']=Date("Y-m-d h:i:sa");
		$odata['LastUpdatedDate']=Date("Y-m-d h:i:sa");
		$odata['DaysofWeek']=$_POST['daysofweek'];
		$odata['CustomerId']=$cID;
		$this->Common_Model->save('orders',$odata);
		
		$msg =  'Name: '.$_POST['name'] ."\n";
		$msg.=	'Email: '.$_POST['email'] ."\n";
		$msg.=	'Phone: '.$_POST['phone'] ."\n";
		$msg.=	'Address: '.$_POST['address'] ."\n";
		$msg.=	'Chef Name: '.$_POST['chefName'] ."\n";
		$msg.=	'Menu Name: '.$_POST['Menu1'] ."\n";
		$msg.=	'Start Date: '.$_POST['StartDate'] ."\n";
		$msg.=	'DeliveryTime: '.$_POST['delivertime'] ."\n";
		$msg.=	'Quantity: '.$_POST['Quantity'] ."\n";
		$msg.=	'PaymentMethod: Cash on delivery';
		$msg.=	'PaymentCycleMethod: Daily';
		$msg.=	'Status: New Request';
		
		
		$Subject='CaptainFood Orders';
		mail('zainulabidinkhan@hotmail.com', $Subject, $msg );

	}
}