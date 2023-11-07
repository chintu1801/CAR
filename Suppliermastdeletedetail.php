<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>SUPPLIER MASTER</title>
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

</head>
 
<body bgcolor=""> 

<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>SUPPLIER MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$SupplierCode=$_GET['SupplierCode'];
$con=mysql_connect("localhost","root","");
mysql_selectdb("carcare");
$sql="select * from Suppliermast where SupplierCode='$SupplierCode'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    
    $SupplierCode=$row['SupplierCode'];
    $SupplierName=$row['SupplierName'];
    $SupplierAddress=$row['SupplierAddress'];
    $MobileNo=$row['MobileNo'];
    $Email=$row['Email'];
      
}
?>
<form method="POST" action="Suppliermastdelete.php">

<tr>
<td>SupplierCode</td>
<td><input type="text" name="SupplierCode" value="<?php echo $SupplierCode;?>"/></td>
</tr>
<tr>
<td>SupplierName</td>
<td><input type="text" name="SupplierName" value="<?php echo $SupplierName;?>"/></td>
</tr>
<tr>
<td>SupplierAddress</td>
<td><input type="text" name="SupplierAddress" value="<?php echo $SupplierAddress;?>"/></td>
</tr>
<tr>
<td>MobileNo</td>
<td><input type="text" name="MobileNo" value="<?php echo $MobileNo;?>"/></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?php echo $Email;?>"/></td>
</tr>
<tr>
<td colspan="2" align="center"><input class="button" type="submit" name="Delete" value="Delete"/></td>
</tr>
</table>
</form> 
<?php
mysql_close($con);
?>
</body>
</html>