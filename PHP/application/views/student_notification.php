<html>
<head>
<title>NOTIFICATIONS</title>
<head>
<body>

<?php foreach($details as $det){ ?>

<center><h1> EXAMINATION SECTION</h1> 
<h2>KAKATIYA INSTITUTE OF SCIENCE AND TECHNOLOGY,WARANGAL</h2>
<h4>(An Autonomous Institute under Kakatiya University)</h4>
</center>
<p> No: <?php echo $det->not_num ?></p>
 
 <?php
    $var=date("d/m/y"); 
    echo "Date:" .$var 
 ?>
 
<h2><center> NOTIFICATION </center></h2>
 It is hereby notified that the following Examinations will be held conducted from <?php echo $det->exam_start_date ?> 
 <center><p>a)<?php echo $det->not_title?> </p></center>
 <p>
 <b><ins>FEE PARTICULARS:</ins></b><br>
 <label>Up to THREE papers:<?php echo $det->fee_upto_3papers?></label><br>
 <label> More than THREE papers:<?php echo $det->fee_morethan_3papers?></label><br>
 </p>
 
 <p>
 <b><ins>ON-LINE REGISTRATION FOR EXAMINATIONS </ins></b>
 <br> The students who wish to appear for the above examinations are to note that the online registration for the examinations will be carried out as per the schedule given below.
 <label>On-line registration without late fee:<?php echo $det->lastdate_without_latefee ?></label><br>
 <label>Registration with Rs <?php echo $det->first_latefee?>/- late fee: <td></td><td></td><td></td>till<?php echo $det->lastdate_with_1stlatefee ?></label><br>
 <label>Registration with Rs <?php echo $det->second_latefee?>/-late fee:<td></td><td></td><td></td><?php echo $det->lastdate_with_1stlatefee?>to<?php echo $det->lastdate_with_2latefee?></label><br>
 <label>Registartion with RS <?php echo $det->third_latefee?>/- late fee:<td></td><td></td><td></td><?php echo $det->lastdate_with_1stlatefee?>to<?php echo $det->lastdate_with_3latefee?></label><br>
 </p>
 
 <p>
<b><ins>NOTE:</ins></b>
<ol type=1>
<li>The date of commencement of examinations and the detailed TIME_TABLE will be notified in due course.
<li>No application form will be accepted after the final due date for payment of fee and submission of application form.
<li>Fee once remitted will not be refunded or adjusted under any circumstances. Therefore,candidates should confirm their eligibility by going through the rules and regulations before remittance of examination fee
 </ol>
</p>
<br>
<h2 align="center">
Subjects
</h2>
<form action="<?php echo site_url('control1/challan')?>" method="post">
<input type="checkbox" name="subjects" value="sub1"><b>subject1</b><br>
<input type="checkbox" name="subjects" value="sub2"><b>subject2</b><br>
<input type="checkbox" name="subjects" value="sub3"><b>subject3</b><br>
<input type="checkbox" name="subjects" value="sub4"><b>subject4</b><br>
<input type="checkbox" name="subjects" value="sub5"><b>subject5</b><br>
<input type="checkbox" name="subjects" value="sub6"><b>subject6</b><br>
<br>
<br>
<h2 align="center">
<a href="<?php echo site_url('control1/challan')?>?id=<?php echo $det->not_num?>">Submit</a>
</h2>
<?php } ?>
</form>
</body>
</html>