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

<tr>
<th>Username</th>
<th>MailId</th>
<th>Password</th>
<th>ConfirmPassword</th>
<th>CatagoryName</th>
<th>SecurityQuestion</th>
<th>SecurityAnswer</th>
<th>Dob</th>
	<th>Action</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");
$sql="select * from registration";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    $D_Username=$row['Username'];
    $D_MailId=$row['MailId'];
    $D_Password=$row['Password'];
    $D_Confirmpassword=$row['ConfirmPassword'];
    $D_CatagoryName=$row['CatagoryName'];
    $D_SecurityQuestion=$row['SecurityQuestion'];
    $D_SecurityAnswer=$row['SecurityAnswer'];
    $D_Dob=$row['Dob'];


?>

<tr>
<td><?php echo $D_Username;?></td>
<td><?php echo $D_MailId;?></td>
<td><?php echo $D_Password;?></td>
<td><?php echo $D_Confirmpassword;?></td>
<td><?php echo $D_CatagoryName;?></td>
<td><?php echo $D_SecurityQuestion;?></td>
<td><?php echo $D_SecurityAnswer;?></td>
<td><?php echo $D_Dob;?></td>
<td><a href="RegistrationdeleteDetails.php?D_Username=<?php echo $D_Username;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

}
</table>
</body>
</html>
