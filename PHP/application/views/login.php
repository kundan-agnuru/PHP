<html>
<head>
<title>login</title>
</head>
<body>

<center><h1> EXAMINATION SECTION</h1> 
<h2>KAKATIYA INSTITUTE OF SCIENCE AND TECHNOLOGY,WARANGAL</h2>
<h4>(An Autonomous Institute under Kakatiya University)</h4>
</center>


<form action =" <?php echo site_url('control1/login')?>" method="post">
<center>
<FONT SIZE=5>STUDENT LOGIN</FONT>

<table>
<tr>
<td>Email-id:</td><td>
<input type="text" name="id" size=20> </td>
</tr>

<tr>
<td>Password:</td>
<td>
<input type="password" name="pwd1" size=20> </td>
</tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td></td>
<td><button type="submit">Login</button></td>
<td></td>
<td><input type="reset" name="reset" value="clear">
</td>
</tr>

</table>
</center>
 </form>

</body>
</html>
