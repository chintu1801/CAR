<!DOCTYPE HTML>
<html>
<head>
<title>ITEM MASTER</title>

<style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  
<body bgcolor=""> 
<center>
<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>ITEM MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>

<th>Item Code  </th>
<th>Item Name</th>
<th>ABC Code</th>
<th>U.O.M. </th>
<th>Qauntity</th>
<th>Rate</th>
<th>Value</th>
<th>Gst_rate</th>
<th>Gst_amount</th>
<th>Mini_level</th>
<th>Max_level</th>
<th>War_gu</th>
<th>Action</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("carcare");
$sql="select * from item_master";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    $Icode=$row['I_code'];
    $Inm=$row['I_name'];
  
    $Iabc=$row['abc_code'];
    $Iuom=$row['Unit_meansure'];
    $Iqty=$row['Quantity'];
    $Irate=$row['Rate'];
    $IValue=$row['Value'];
    $IGSTrate=$row['Gts_rate'];
    $IGSTamount=$row['Gst_amount'];
    $Mini=$row['Mini_level'];
    $Max=$row['Max_level'];
    $War_gu=$row['War_gu'];
    
  ?>

<tr>
<td><?php echo $Icode;?></td>
<td><?php echo $Inm;?></td>
<td><?php echo $Iabc;?></td>
<td><?php echo $Iuom;?></td>
<td><?php echo $Iqty;?></td>
<td><?php echo $Irate;?></td>
<td><?php echo $IValue;?></td>
<td><?php echo $IGSTrate;?></td>
<td><?php echo $IGSTamount;?></td>
<td><?php echo $Mini;?></td>
<td><?php echo $Max;?></td>
<td><?php echo $War_gu;?></td>
<td><a href="itemmastereditdetails.php?I_code=<?php echo $Icode;?>">Edit</a></td>
</tr>


<?php
}
mysql_close($con);
?>
</center>
</body>
</html>
