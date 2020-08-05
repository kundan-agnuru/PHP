<html>
<head>
<title> Registrations</title>
</head>

<body>
<form action="<?php echo site_url('control1/registration')?>" method="post" enctype="multipart/form-data">

<table>

<tr>
<td>First Name:</td>
<td><input type="text" name="n1" placeholder="first name" size=20> </td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="n2" placeholder="last name" size=20> </td>
</tr>

<tr>
<td>Surname:</td>
<td><input type="text" name="n3" placeholder="surname" size=20> </td>
</tr>

<tr>
<td>Hall-ticket Number:</td>
<td><input type="text" name="num1" placeholder="Rollno" size=20> </td>
</tr>

<tr>
<td>Father's Name:</td>
<td><input type="text" name="n4" placeholder="dad name" size=20> </td>
</tr>

<tr>
<td>Mother's Name:</td>
<td><input type="text" name="n5" placeholder="mom name" size=20> </td>
</tr>

<tr>
<td>Branch:</td>
<td><input type="text" name="br" placeholder="Branch" size=20> </td>
</tr>

<tr>
<td>Date of Birth:</td>
<td><input type="date" name="d1"> </td>
</tr>

<tr>
<td>Contact:</td>
<td><input type="text" name="num2"  size=20> </td>
</tr>

<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender"  value="female" checked="check">Female</td>
</tr>


<tr>
<td>Email-id:</td>
<td><input type="text"  name="id" placeholder="email-id" size=20> </td>
</tr>

<tr>
<td> New Password:</td>
<td><input type="password" name="pwd1" placeholder="new password" size=20> </td>
</tr>

<tr>
<td> Conform Password:</td>
<td><input type="password" name="pwd2" placeholder="conform password" size=20> </td>
</tr>

<tr>
<td>Photo:</td>
<td><input type="file" name="img"> </td>
</tr>

<tr>
<td>Sign:</td>
<td><input type="file" name="img1"> </td>
</tr>

<tr>
<td><input type="submit"" name="submit" value="Sign Up"></td>
<td><input type="reset" name="reset" value="clear"></td>
</tr>

</table>
</div>
</form>
</body>
</html>
//FUNCTIONS RELATED TO REGISTRATION.PHP
	/*public function reg()
	{
		$this->load->view('registration');
	}
	
	public function registration()
	{
		
		$mail_id=$this->input->post('id');
		$pwd1=$this->input->post('pwd1');
		$pwd2=$this->input->post('pwd2');
		if(!empty($mail_id) && ($pwd1) && ($pwd2))
		{
			if($pwd1==$pwd2)
			{
		     $x=$this->model1->email_check();
			  if(!empty($x))
		       	{
				    echo "<script>  alert('already registered,try with another mail_id'),history.go(-1); </script>";
			     }
			    else
			     {
				     $this->model1->db_logreg();
				      redirect('control1/index');
			     }
			}
			else 
			{
				echo "<script>  alert('Password & confirm password mis-match'),history.go(-1); </script>";
			}
		}
		else
		{
			echo "<script>alert('Please fill all the details'),history.go(-1);</script>";
		}
	} */

/* public function no_past()
    {
    	$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
    	$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
    	$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }*/