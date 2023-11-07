<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>REGISTRATION</title>
    
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

<marquee><h1 class="impact"style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>REGISTRATION</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$Username=$_REQUEST['D_Username'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");

$sql="select * from registration where Username='$Username'";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
     
    $D1=$row['Username'];
    $D2=$row['MailId'];
    $D3=$row['Password'];
    $D4=$row['ConfirmPassword'];
    $D5=$row['CatagoryName'];
    $D6=$row['SecurityQuestion'];
    $D7=$row['SecurityAnswer'];
    $D8=$row['Dob'];

}

?>

<form method="Post" action="Registrationdeletesave.php">

<tr>
<td>Username:</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Mail ID:</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>



<tr>
<td>Password:</td>
<td><input type="password" name="D3" value="<?php echo $D3;?>"/></td>
</tr>



<tr>
<td>Confirm Password:</td>
<td><input type="password" name="D4" value="<?php echo $D4;?>"/></td>
</tr>



<tr>
<td>Catagory Name:</td>
<td><input type="text" name="D5" value="<?php echo $D5;?>"/></td>
</tr>



<tr>
<td>Security Question:</td>
<td><input type="text" name="D6" value="<?php echo $D6;?>"/></td>
</tr>



<tr>
<td>Security Answer:</td>
<td><input type="text" name="D7" value="<?php echo $D7;?>"/></td>
</tr>



<tr>
<td>Dob:</td>
<td><input type="Date" name="D8" value="<?php echo $D8;?>"/></td>
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