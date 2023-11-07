<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>LABOUR DETAILS</title>

    
     <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>

</head>
 
<body bgcolor=""> 

<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>LABOUR DETAILS</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


<tr>
<th>Labour Code </th>
<th>Labour Desc</th>
<th>Jobcard No</th>
<th>Charges</th>
<th>Tax</th>
<th>GST Amount</th>
<th>Discount</th>
<th>Total Amount</th>
<th>Action</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
if($con)

    echo "Connection Successful"."<br/>";


mysql_selectdb("carcare");
$sql="select * from labour_detail";
$result=mysql_query($sql,$con);

while($row= mysql_fetch_array($result))
{

    $LC=$row['labour_code'];
    $LD=$row['labour_desc'];
    $jobno=$row['jobcard_no'];
    $charg=$row['Charges'];
    $tax=$row['Tax'];
    $gstam=$row['gst_amount'];    
    $dis=$row['Discount'];
   $tamt=$row['Total_Amount'];
?> 
<tr>
<td><?php echo $LC;?></td>
<td><?php echo $LD;?></td>
<td><?php echo $jobno;?></td>
<td><?php echo $charg;?></td>
<td><?php echo $tax;?></td>
<td><?php echo $gstam;?></td>
<td><?php echo $dis;?></td>
<td><?php echo $tamt;?></td>
<td><a href="Labour_Detailsdeletedetails.php?labour_code=<?php echo $LC;?>">Delete</a></td>
</tr>




<?php
}
    mysql_close($con);

?>
</Center>
</body>
</html>