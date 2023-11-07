<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>CUSTOMER MASTER</title>
    
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

<h1 class="impact" style="color:white;"><b>CUSTOMER MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">



<?php

$C_ID=$_REQUEST['Customer_ID'];

//echo $C_ID;
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL<br/>";
}
mysql_selectdb("carcare");

$sql="select * from customer_mast where Customer_ID='$C_ID'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
     
    $C_ID=$row['Customer_ID'];
    $C_Name=$row['Customer_Name'];
    $C_Add=$row['Customer_Address'];
    $C_mobile_No=$row['Customer_mobile_No'];
    $C_Email=$row['Customer_Email'];
     $C_Vehicle_No=$row['Customer_Vehicle_No'];
      $C_Vehicle_Name=$row['Customer_Vehicle_Name'];
        
}

?>

<form method="Post" action="CustomerMasterUpdate.php">

<tr>
<td>CUSTOMER ID:</td>
<td><input type="text" name="C_ID" value="<?php echo $C_ID;?>"/></td>
</tr>


<tr>
<td>CUSTOMER NAME:</td>
<td><input type="text" name="C_Name" value="<?php echo $C_Name;?>"/></td>
</tr>



<tr>
<td>CUSTOMER ADDRESS:</td>
<td><input type="text" name="C_Add" value="<?php echo $C_Add;?>"/></td>
</tr>


<tr>
<td>CUSTOMER MOBILE NO:</td>
<td><input type="text" name="C_mobile_No" value="<?php echo $C_mobile_No;?>"/></td>
</tr>

<tr>
<td>CUSTOMER EMAIL:</td>
<td><input type="text" name="C_Email" value="<?php echo $C_Email;?>"/></td>
</tr>

<tr>
<td>CUSTOMER VEHICLE NO:</td>
<td><input type="text" name="C_Vehicle_No" value="<?php echo $C_Vehicle_No;?>"/></td>
</tr>

<tr>
<td>CUSTOMER VEHICLE NAME:</td>
<td><input type="text" name="C_Vehicle_Name" value="<?php echo $C_Vehicle_Name;?>"/></td>
</tr>



<tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Submit" value="Submit"/>
</td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>