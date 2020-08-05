<html>
<head>
<title>notification</title>
</head>

<body>

<center><h1> EXAMINATION SECTION</h1> 
<h2>KAKATIYA INSTITUTE OF SCIENCE AND TECHNOLOGY,WARANGAL</h2>
<h4>(An Autonomous Institute under Kakatiya University)</h4>
</center>

<form action="<?php echo site_url('control1/not1')?>" method="post">
<center>
<table>

<tr>
<td>Notification number:</td>
<td><input type="text" name="num" size=30> </td>
</tr>

<tr>
<td>Notification title:</td>
<td><input type="text" name="title" size=30> </td>
</tr>

<tr>
<td>Fee upto three papers:</td>
<td><input type="text" name="fee1" size=30> </td>
</tr>


<tr>
<td>Fee for more than three papers:</td>
<td><input type="text" name="fee2" size=30> </td>
</tr>


<tr>
<td>First late fee:</td>
<td><input type="text" name="fee3" size=30> </td>
</tr>

<tr>
<td>Second late fee:</td>
<td><input type="text" name="fee4" size=30> </td>
</tr>

<tr>
<td>Third late fee:</td>
<td><input type="text" name="fee5" size=30> </td>
</tr>


<tr>
<td>Exam start date:</td>
<td><input type="date" name="date1" size=30> </td>
</tr>

<tr>
<td>Last date without late fee:</td>
<td><input type="date" name="date2" size=30> </td>
</tr>


<tr>
<td>Last date for first late fee:</td>
<td><input type="date" name="date3" size=30> </td>
</tr>

<tr>
<td>Last date for second late fee:</td>
<td><input type="date" name="date4" size=30> </td>
</tr>

<tr>
<td>Last date for third late fee:</td>
<td><input type="date" name="date5" size=30> </td>
</tr>

<tr></tr>
<tr></tr>
<tr></tr>
<tr>
<td></td>
<td><input type="submit" name=submit value="Submit"></td>
<td></td>
<td><input type="reset" name="reset" value="Clear">
</td>
</tr>

</table>
</center>
</form>
</body>
</html>
