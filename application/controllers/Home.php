<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		//$msg=array();
		//Featured Chefs
		$Chefwhere['IsFeatured']=1;
		$Ftchefs=$this->Common_Model->find('chefs', '*',$Chefwhere);
		$data['ftchefs']=$Ftchefs;
		$result=$this->Common_Model->find('chefs', '*');
		$data['results']=$result;
		$this->load->view('CaptainFood/homenew',$data);		
	}
	public function newHome()
	{
		//Featured Chefs
		$Chefwhere['IsFeatured']=1;
		$Ftchefs=$this->Common_Model->find('chefs', '*',$Chefwhere);
		$data['ftchefs']=$Ftchefs;
		$result=$this->Common_Model->find('chefs', '*');
		$data['results']=$result;
		$this->load->view('CaptainFood/homenew',$data);
	}
	public function FAQ()
	{
                //Featured Chefs
		$Chefwhere['IsFeatured']=1;
		$Ftchefs=$this->Common_Model->find('chefs', '*',$Chefwhere);
		$data['ftchefs']=$Ftchefs;
		$this->load->view('CaptainFood/FAQ',$data);
	}
	public function Terms()
	{
                //Featured Chefs
		$Chefwhere['IsFeatured']=1;
		$Ftchefs=$this->Common_Model->find('chefs', '*',$Chefwhere);
		$data['ftchefs']=$Ftchefs;
		$this->load->view('CaptainFood/Terms',$data);
	}
	public function menu($ChefID=0)
	{
		//$msg=array();
		
		if($ChefID)
		{
			$where['ChefID']=$ChefID;
			$chefs=$this->Common_Model->find('chefs', '*',$where);
			$data['chef']=$chefs;
			$result=$this->Common_Model->find('menu', '*',$where);
			$data['results']=$result;
			//Featured Chefs
		$Chefwhere['IsFeatured']=1;
		$Ftchefs=$this->Common_Model->find('chefs', '*',$Chefwhere);
		$data['ftchefs']=$Ftchefs;
			$this->load->view('CaptainFood/Menu',$data);		
		}
	}
	
	public function SendEmail()
	{
		$msg =  'Name: '.$_POST['name'] ."\n";
		$msg.=	'Email: '.$_POST['email'] ."\n";
		$msg.=	'Phone: '.$_POST['phone'] ."\n";
		$msg.=	'Message: '.$_POST['message'] ."\n";
		
		if($_POST['message']=='Chef Join')
		{
		$Subject='Captain Food chefs';
		}
		else
		{
		$Subject='Captain Food Contact';
		}
		mail('m.osamamanzoor@gmail.com', $Subject, $msg );
		

	}
	
	public function ChefJoin()
	{
		$msg =  'Email: '.$_POST['joinUsEmail'] ."\n";
		$msg.=	'Phone: '.$_POST['joinUsphone'] ."\n";
		$msg.=	'Name: Shah'."\n";
		$msg.=	'Message: kesa hai'."\n";
		
		$Subject='CaptainFood';
		mail('m.osamamanzoor@gmail.com', $Subject, $msg );
		

	}
	

}
