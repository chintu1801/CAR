<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>PARTS DETAILS REPORT</title>


 <--
  <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  -->
  


</head>

<body bgcolor="">

<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>PARTS DETAILS</b></h1>
<h1 class="impact" style="color:white;"><b>Parts Details Report</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>Job_No</th>
<th>Part_Code</th>
<th>Part_Name</th>
<th>Quantity</th>
<th>Rate</th>
<th>GST_Rate</th>
<th>Discount</th>
<th>Billing_Type</th>
<th>Amount</th>

</tr>

<?php
$con=mysql_connect("localhost","root","");
/*if($con)
{
    //echo "Connected to MySQL<br/>";
}*/
mysql_selectdb("carcare");
$sql="select * from partsdetail";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $D_Job_No=$row['Job_No'];
    $D_Part_Code=$row['Part_Code'];
    $D_Part_Name=$row['Part_Name'];
    $D_Quantity=$row['Quantity'];
    $D_Rate=$row['Rate'];
    $D_GST_Rate=$row['GST_Rate'];
    $D_Discount=$row['Discount'];
    $D_Billing_Type=$row['Billing_Type'];
    $D_Amount=$row['Amount'];
?>

<tr>
<td><?php echo $D_Job_No;?></td>
<td><?php echo $D_Part_Code;?></td>
<td><?php echo $D_Part_Name;?></td>
<td><?php echo $D_Quantity;?></td>
<td><?php echo $D_Rate;?></td>
<td><?php echo $D_GST_Rate;?></td>
<td><?php echo $D_Discount;?></td>
<td><?php echo $D_Billing_Type;?></td>
<td><?php echo $D_Amount;?></td>


</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
