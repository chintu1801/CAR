<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>PARTS DETAILS</title>
    
    <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


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
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Job_No=$_REQUEST['Job_No'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");

$sql="select * from partsdetail where Job_No='$Job_No'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
   $uD1=$row['Job_No'];
    $uD2=$row['Part_Code'];
    $uD3=$row['Part_Name'];
    $uD4=$row['Quantity'];
    $uD5=$row['Rate'];
    $uD6=$row['GST_Rate'];
    $uD7=$row['Discount'];
    $uD8=$row['Billing_Type'];
    $uD9=$row['Amount'];
    
}

?>

<form method="Post" action="PartsDetaildeletesave.php">

<tr>
<td>Job No:</td>
<td><input type="text" name="D1" value="<?php echo $uD1;?>"/></td>
</tr>


<tr>
<td>Part Code:</td>
<td><input type="text" name="D2" value="<?php echo $uD2;?>"/></td>
</tr>



<tr>
<td>Part Name:</td>
<td><input type="text" name="D3" value="<?php echo $uD3;?>"/></td>
</tr>



<tr>
<td>Quantity:</td>
<td><input type="text" name="D4" value="<?php echo $uD4;?>"/></td>
</tr>

<tr>
<td>Rate:</td>
<td><input type="text" name="D5" value="<?php echo $uD5;?>"/></td>
</tr>

<tr>
<td>GST Rate:</td>
<td><input type="text" name="D6" value="<?php echo $uD6;?>"/></td>
</tr>

<tr>
<td>Discount:</td>
<td><input type="text" name="D7" value="<?php echo $uD7;?>"/></td>
</tr>

<tr>
<td>Billing Type:</td>
<td><input type="text" name="D8" value="<?php echo $uD8;?>"/></td>
</tr>



<tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Delete" value="Delete"/></td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>