<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>SERVICE MASTER</title>
    
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

<h1 class="impact" style="color:white;"><b>SERVICE MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Service_Code=$_REQUEST['Service_Code'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");

$sql="select * from servicemaster where Service_Code='$Service_Code'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
     
    $D1=$row['Service_Code'];
    $D2=$row['Service_Name'];
    $D3=$row['Service_Type'];
    $D4=$row['Service_Charge'];
    
}

?>

<form method="Post" action="ServiceMasterdeletesave.php">

<tr>
<td>Service Code:</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Service Name:</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>



<tr>
<td>Service Type:</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Service Charge:</td>
<td><input type="text" name="D4" value="<?php echo $D4;?>"/></td>
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