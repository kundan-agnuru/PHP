<?php
if(!defined('BASEPATH'))  exit('No direct script access allowed');

class model1 extends CI_Model
{
	 function  __construct()

	{
		parent:: __construct();
		$this->load->database();
		$this->load->library('session');
	}
	public function db_logreg()
	{
		$data['firstname']=$this->input->post('n1');
		$data['lastname']=$this->input->post('n2');
		$data['surname']=$this->input->post('n3');
		$data['dadname']=$this->input->post('n4');
		$data['momname']=$this->input->post('n5');
		$data['htnum']=$this->input->post('num1');
		$data['mail_id']=$this->input->post('id');
		$data['contact']=$this->input->post('num2');
		$data['gender']=$this->input->post('gender');
		$data['new_pwd']=$this->input->post('pwd1');
		$data['dob']=$this->input->post('d1');
		$data['branch']=$this->input->post('br');
		//$data['picture']=$this->input->post('img');
		//$data['sign']=$this->input->post('img1');
		/*$config['upload_path'] ='./img/';
		$config['allowed_types'] ='jpg|jpeg|png|gif';
		$config['max_size'] = '4096';
		$this->load->library('upload',$config);
		$upload['v'] = $this->upload->do_upload('img');
		if(!empty($upload))
		{
			$doc=$this->upload->data();
			$data['picture']=base_url("img/".$doc['file_name']);	
			
		}*/
		$this->db->insert('student',$data);
	}
	
	public function db_notification()
	{
		$not['not_num']=$this->input->post('num');
		$not['exam_start_date']=$this->input->post('date1');
		$not['not_title']=$this->input->post('title');	
		$not['fee_upto_3papers']=$this->input->post('fee1');
		$not['fee_morethan_3papers']=$this->input->post('fee2');
		$not['lastdate_without_latefee']=$this->input->post('date2');
		$not['lastdate_with_1stlatefee']=$this->input->post('date3');
		$not['lastdate_with_2latefee']=$this->input->post('date4');
		$not['lastdate_with_3latefee']=$this->input->post('date5');
		$not['first_latefee']=$this->input->post('fee3');
		$not['second_latefee']=$this->input->post('fee4');
		$not['third_latefee']=$this->input->post('fee5');
		$temp=$not['not_num'];
		 $this->db->insert('notification',$not);
		 return $this->db->query("select * from notification where not_num = '$temp' ")->result();
	}	
	public function db_admin()
	{
		$ad['username']=$this->input->post('username');
		$ad['password']=$this->input->post('password');
		$this->db->insert('admin',$ad);
		return $this->db->query("select * from admin")->result();
	}
	public function email_check()
	{
		$mail_id=$this->input->post('id');
		return $this->db->query("select * from student where mail_id='$mail_id' ")->result();
	} 
	
	public function login()
	{
		$mail_id=$this->input->post('id');
		$pwd=$this->input->post('pwd1');		
		return $this->db->query("select * from student where mail_id='$mail_id'and new_pwd='$pwd' ")->result();
	}
	public function admin_login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		return $this->db->query("select * from admin where mail_id='$username'and password='$password' ")->result();
	}
	public function admin_check()
	{
		$username=$this->input->post('username');
		return $this->db->query("select * from admin where mail_id='$username' ")->result();
	}
	public function func()
	 //2public function func($id)
	{
		$id=$this->session->userdata('rollno');
		return $this->db->query("select * from student where rollno='$id'")->result();
	}    
	public function notify1()
	{
		$data=$this->db->query("select * from notification where not_title='btech-1'")->result();
		foreach($data as $d)
		{
			$c=$d->not_num;
		}
		return $this->db->query("select * from notification where not_num='$c'")->result();
	}
	public function notify2()
	{
		$data=$this->db->query("select * from notification where not_title='btech-2'")->result();
		foreach($data as $d)
		{
			$c=$d->not_num;
		}
		return $this->db->query("select * from notification where not_num='$c'")->result();
	}
	public function chall($temp)
	{
		
		return $this->db->query("select * from notification where not_num='$temp'")->result();
	}
	public function func1()
	{
		$id=$this->session->userdata('x');
		return $this->db->query("select * from notification where sno='$id'")->result();
	}
}
?>
