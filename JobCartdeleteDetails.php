<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>JOB CARD</title>
 
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

<h1 class="impact" style="color:white;"><b>JOB CARD</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$JobCart_No=$_REQUEST['JobCart_No'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");

$sql="select * from jobcart where JobCart_No='$JobCart_No'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
     
   $D1=$row['JobCart_No'];
   $D2=$row['Customer_Id'];
   $D3=$row['Customer_Name'];
   $D4=$row['Customer_Address'];
   $D5=$row['Mobile_No'];
   $D6=$row['Model_Name'];
   $D7=$row['Vehicle_Name'];
   $D8=$row['Vehicle_No'];
   $D9=$row['JobCart_Date'];
   $D10=$row['Fuel'];
   $D11=$row['Date_Time_In'];
   $D12=$row['Date_Time_Out'];
   $D13=$row['Job_Allocation'];
   $D14=$row['Kms'];
   $D15=$row['Complain_Id'];
   $D16=$row['Complain_Des'];
   $D17=$row['Bay_No'];


}

?>

<form method="Post" action="JobCartdeletesave.php">

<tr>
<td>Job Cart No:</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Customer Id:</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>



<tr>
<td>Customer Name:</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Customer Address:</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Mobile No:</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>



<tr>
<td>Model Name:</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>



<tr>
<td>Vehicle Name:</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>



<tr>
<td>Vehicle No:</td>
<td><input type="text" name="D8" value="<?php echo $D8;?>"/></td>
</tr>
 
 
 <tr>
<td>Job Cart Name:</td>
<td><input type="text" name="D9" value="<?php echo $D9;?>"/></td>
</tr>

<tr>
<td>Fuel:</td>
<td><input type="text" name="D10" value="<?php echo $D10;?>"/></td>
</tr>

<tr>
<td>Date Time In:</td>
<td><input type="text" name="D11" value="<?php echo $D11;?>"/></td>
</tr>

<tr>
<td>Date Time Out:</td>
<td><input type="text" name="D12" value="<?php echo $D12;?>"/></td>
</tr>


<tr>
<td>Job Allocation:</td>
<td><input type="text" name="D13" value="<?php echo $D13;?>"/></td>
</tr>


<tr>
<td>Kms:</td>
<td><input type="text" name="D14" value="<?php echo $D14;?>"/></td>
</tr>


<tr>
<td>Complain Id:</td>
<td><input type="text" name="D15" value="<?php echo $D15;?>"/></td>
</tr>

<tr>
<td>Complain Des:</td>
<td><input type="text" name="D16" value="<?php echo $D16;?>"/></td>
</tr>

<tr>
<td>Bay No:</td>
<td><input type="text" name="D17" value="<?php echo $D17;?>"/></td>
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