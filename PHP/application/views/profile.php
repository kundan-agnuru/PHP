<html>
<body style=background-color:honeydew>
   	<h1 align="center">Student Profile </h1><br>
   	<?php foreach($e as $det){?>
   	<h2>
   		Student Name:<?php echo $det->name?><br>
   		Roll No:<?php echo $det->rollno?><br>
   	</h2>
   
   	<?php }?>
   <h1 align="center">
   Exam Notification
   <br>
    <?php $id=300?>
    <a href=<?php echo site_url('control1/prof1')?>>B.Tech-I year exam notificaion</a>
    <br> 
   
    <a href=<?php echo site_url('control1/prof2')?>>B.Tech-II year exam notificaion</a>
   <br>
   </h1>
   </body>
</html>