<html>
<title>
</title>
<head>
</head>
<body>
<?php foreach ($details as $det){?>
<table border="1" align="center">
<tr>
<td rowspan="35">
<pre>
(submitted to bank)        ORIGINAL
<br>
S.No:123            date:__________
     <b>State Bank Of
		Hyderabad</b>
   Yerragattu gutta branch,KITSW
    KITS EXAMINATION.A/C.No:
         62380775030
-----------------------------------	
Name:       <b><?php echo $this->session->userdata('name')?></b> 
Year:       <b><?php echo $det->not_title?></b>                    
Roll.No:    <b><?php echo $this->session->userdata('rollno')?> </b>
    <b>Fee to be paid as per below dates</b><br>
<table border="5" align="center">
<tr>
<th>SNo</th>
<th><pre>Fee paid 
 between dates</pre></th>
<th><pre>Fee amount 
to be paid</pre></th>
</tr>
<tr>
<td>1</td>
<td><?php echo $det->lastdate_without_latefee?>
<br>to
 <br><?php echo $det->lastdate_with_1stlatefee?>
</td>
<td><?php echo $det->fee_morethan_3papers?>
</td>
</tr>
<tr>
<td>2</td>
<td><?php echo $det->lastdate_with_1stlatefee?>
<br>to
<br>
    <?php echo $det->lastdate_with_2latefee?>
</td>
<td><?php echo $det->first_latefee?>
</td>
</tr>
<tr>
<td>3</td>
<td><?php echo $det->lastdate_with_2latefee?>
<br>to
<br><?php echo $det->lastdate_with_3latefee?>
</td>
<td><?php echo $det->second_latefee?>
</td>
</tr>
<tr>
<td>4</td>
<td><?php echo $det->lastdate_with_3latefee?>
<br>to
<br><?php echo $det->exam_start_date?>
</td>
<td><?php echo $det->third_latefee?>
</td>
</tr>
</table>
Final paid Amount
(Rupees                          only)         
      
                      
                         
                         Signature of Remitter
----------------------------------------------
           <font size="5">FOR USE OF BANK</font>
 Paid Rs:_______________ScrollNo:_____________
 Head/Cashier
 
 
                                  Manager/Actt        
</pre>
</td>
<td rowspan="35">
<pre>
(submitted to bank)                DUPLICATE
<br>
S.No:123            date:__________
     <b>State Bank Of
		Hyderabad</b>
   Yerragattu gutta branch,KITSW
    KITS EXAMINATION.A/C.No:
         62380775030
-----------------------------------	
Name:       <b><?php echo $this->session->userdata('name')?></b> 
Year:       <b><?php echo $det->not_title?></b>                    
Roll.No:    <b><?php echo $this->session->userdata('rollno')?> </b>
    <b>Fee to be paid as per below dates</b><br>
<table border="5" align="center">
<tr>
<th>SNo</th>
<th><pre>Fee paid 
 between dates</pre></th>
<th><pre>Fee amount 
to be paid</pre></th>
</tr>
<tr>
<td>1</td>
<td><?php echo $det->lastdate_without_latefee?>
<br>to
 <br><?php echo $det->lastdate_with_1stlatefee?>
</td>
<td><?php echo $det->fee_morethan_3papers?>
</td>
</tr>
<tr>
<td>2</td>
<td><?php echo $det->lastdate_with_1stlatefee?>
<br>to
<br>
    <?php echo $det->lastdate_with_2latefee?>
</td>
<td><?php echo $det->first_latefee?>
</td>
</tr>
<tr>
<td>3</td>
<td><?php echo $det->lastdate_with_2latefee?>
<br>to
<br><?php echo $det->lastdate_with_3latefee?>
</td>
<td><?php echo $det->second_latefee?>
</td>
</tr>
<tr>
<td>4</td>
<td><?php echo $det->lastdate_with_3latefee?>
<br>to
<br><?php echo $det->exam_start_date?>
</td>
<td><?php echo $det->third_latefee?>
</td>
</tr>
</table>
Final paid Amount
(Rupees                          only)         
      
                      
                         
                         Signature of Remitter
----------------------------------------------
           <font size="5">FOR USE OF BANK</font>
 Paid Rs:_______________ScrollNo:_____________
 Head/Cashier
 
 
                                  Manager/Actt        
</pre>
</td>
<td rowspan="35">
<pre>
(copy to student)              TRIPLICATE
<br>
S.No:123            date:__________
     <b>State Bank Of
		Hyderabad</b>
   Yerragattu gutta branch,KITSW
    KITS EXAMINATION.A/C.No:
         62380775030
-----------------------------------	
Name:       <b><?php echo $this->session->userdata('name')?></b> 
Year:       <b><?php echo $det->not_title?></b>                    
Roll.No:    <b><?php echo $this->session->userdata('rollno')?> </b>
    <b>Fee to be paid as per below dates</b><br>
<table border="5" align="center">
<tr>
<th>SNo</th>
<th><pre>Fee paid 
 between dates</pre></th>
<th><pre>Fee amount 
to be paid</pre></th>
</tr>
<tr>
<td>1</td>
<td><?php echo $det->lastdate_without_latefee?>
<br>to
 <br><?php echo $det->lastdate_with_1stlatefee?>
</td>
<td><?php echo $det->fee_morethan_3papers?>
</td>
</tr>
<tr>
<td>2</td>
<td><?php echo $det->lastdate_with_1stlatefee?>
<br>to
<br>
    <?php echo $det->lastdate_with_2latefee?>
</td>
<td><?php echo $det->first_latefee?>
</td>
</tr>
<tr>
<td>3</td>
<td><?php echo $det->lastdate_with_2latefee?>
<br>to
<br><?php echo $det->lastdate_with_3latefee?>
</td>
<td><?php echo $det->second_latefee?>
</td>
</tr>
<tr>
<td>4</td>
<td><?php echo $det->lastdate_with_3latefee?>
<br>to
<br><?php echo $det->exam_start_date?>
</td>
<td><?php echo $det->third_latefee?>
</td>
</tr>
</table>
Final paid Amount
(Rupees                          only)         
      
                      
                         
                         Signature of Remitter
----------------------------------------------
           <font size="5">FOR USE OF BANK</font>
 Paid Rs:_______________ScrollNo:_____________
 Head/Cashier
 
 
                                  Manager/Actt        
</pre>
</td>

</tr>
</table>
<?php }?>
</body>
</html>

