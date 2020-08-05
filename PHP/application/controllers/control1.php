<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class control1 extends CI_Controller
{
	 function  __construct()

	{
		parent:: __construct();
		$this->load->helper('url','form');
		$this->load->model('model1');
		//$this->no_past();
		
	}
	//FUNCTIONS RELATED TO LOGIN.PHP
	 public function index()
	{
		$this->load->view('index');
	}
	public function logins()
	{
		$this->load->view('login');
	}
	public function loginad()
	{
		$this->load->view('admin');
	}
	public function login()
	{
		$i=$this->model1->email_check(); 
		
		/*echo "$i";
		$data['det']=$i;*/
		 
		 if(empty($i))
		{	
			echo "<script> alert('invalid username or password');history.go(-1);</script>";   
		}
	    else 
	    {
	    	$x=$this->model1->login();
	    	if(empty($x))
	    	{
	    		echo "<script> alert('password incorrect');history.go(-1);</script>";
	    	}
	    	else 
	    	{
	    		$this->load->view('profile',$i);
	    		foreach($x as $t)
	    		{
	    			 $this->session->set_userdata(array(
	                                   'rollno' => $t->rollno,
	    			 		           'name'=> $t->name,
	    			 		                  ));
	    		}
	    		redirect('control1/profile');	
	    	}
	    }
	}
 public function adminlogin()
 {
 	$i=$this->model1->admin_check();
 	if(empty($i))
 	{
 		echo "<script> alert('invalid username or password');history.go(-1);</script>";
 	}
 	else
 	{
 		$x=$this->model1->admin_login();
 		if(empty($x))
 		{
 			echo "<script> alert('password incorrect');history.go(-1);</script>";
 		}
 		else
 		{
 			$this->load->view('notification',$i);
 			foreach($i as $t)
 			{
 				$id=$t->sno;
 			}
 			$this->session->set_userdata('x',$id);
 			redirect('control1/not');
 		}
 	}
	    		
}
public function profile()
    //2public function profile($id)
    {

    	$t['e']=$this->model1->func();
    	//2$t['e']=$this->model1->func($id);
    	if(!empty($t['e']))
    	{	
    	$this->load->view('profile',$t);	
       	}
    }
    public function prof1()
    {
    	$q['details']=$this->model1->notify1();
    	if(!empty($q['details']))
    	{
    		$this->load->view('student_notification',$q);
    		
    	}
    }
   
    public function prof2()
    {
    	$q['details']=$this->model1->notify2();
    	if(!empty($q['details']))
    	{
    		$this->load->view('student_notification',$q);
    	} 
    }
    public function challan()
    {
    	$temp=$_GET['id'];
    	$data['details']=$this->model1->chall($temp);
    	if(!empty($data['details']))
    	$this->load->view('challan',$data); 
    }
    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('control1/index');
    }
    public function not()
    {
    	$this->load->view('notification');
    }
    public function not1()
    {
    	$j['details']=$this->model1->db_notification();
    	if(!empty($j['details'])) 
    	{
    		
    		$this->load->view('notification_display',$j);
    	}
    	
    }   
}
?>
