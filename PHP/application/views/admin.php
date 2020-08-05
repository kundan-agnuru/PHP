<html>
<head>
<title>login</title>
</head>
<body>

<center><h1> EXAMINATION SECTION</h1> 
<h2>KAKATIYA INSTITUTE OF SCIENCE AND TECHNOLOGY,WARANGAL</h2>
<h4>(An Autonomous Institute under Kakatiya University)</h4>
</center>


<form action =" <?php echo site_url('control1/adminlogin')?>" method="post">
<center>
<FONT SIZE=5>ADMIN LOGIN</FONT>

<table>
<tr>
<td>Username:</td><td>
<input type="text" name="username" size=20> </td>
</tr>

<tr>
<td>Password:</td>
<td>
<input type="password" name="password" size=20> </td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td></td>
<td><button type="submit">Submit</button></td>
<td></td>
<td><input type="reset" name="reset" value="clear">
</td>
</tr>

</table>
</center>
 </form>

</body>
</html>
