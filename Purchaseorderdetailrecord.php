<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>PURCHASE ORDER</title>
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

<h1 class="impact" style="color:white;"><b>PURCHASE ORDER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$PONo=$_GET['PONo'];
$con=mysql_connect("localhost","root","");
mysql_selectdb("carcare");
$sql="select * from purchaseorder where PONo='$PONo'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    
    $PONo=$row['PONo'];
    $PODt=$row['PODt'];
    $SuppCode=$row['SuppCode'];
    $SuppName=$row['SuppName'];
    $SuppAdd=$row['SuppAdd'];
    $GST=$row['GST'];
    $TIN=$row['TIN'];
    $Aadhar=$row['Aadhar'];
    $ItemCode=$row['ItemCode'];
    $Qty=$row['Qty'];
    $Amount=$row['Amount'];    
}
?>
<form method="POST" action="Purchaseorderupdate.php">


<tr>
<td>PONo</td>
<td><input type="text" name="PONo" value="<?php echo $PONo;?>"/></td>
</tr>
<tr>
<td>PODt</td>
<td><input type="date" name="PODt" value="<?php echo $PODt;?>"/></td>
</tr>
<tr>
<td>SuppCode</td>
<td><input type="text" name="SuppCode" value="<?php echo $SuppCode;?>"/></td>
</tr>
<tr>
<td>SuppName</td>
<td><input type="text" name="SuppName" value="<?php echo $SuppName;?>"/></td>
</tr>
<tr>
<td>SuppAdd</td>
<td><input type="text" name="SuppAdd" value="<?php echo $SuppAdd;?>"/></td>
</tr>
<tr>
<td>GST</td>
<td><input type="text" name="GST" value="<?php echo $GST;?>"/></td>
</tr>
<tr>
<td>TIN</td>
<td><input type="text" name="TIN" value="<?php echo $TIN;?>"/></td>
</tr>
<tr>
<td>Aadhar</td>
<td><input type="text" name="Aadhar" value="<?php echo $Aadhar;?>"/></td>
</tr>
<tr>
<td>ItemCode</td>
<td><input type="text" name="ItemCode" value="<?php echo $ItemCode;?>"/></td>
</tr>
<tr>
<tr>
<td>Qty</td>
<td><input type="text" name="Qty" value="<?php echo $Qty;?>"/></td>
</tr>
<tr>
<td>Amount</td>
<td><input type="text" name="Amount" value="<?php echo $Amount;?>"/></td>
</tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Update" value="submit"/></td>
</tr>
</table>
</form> 
<?php
mysql_close($con);
?>
</body>
</html>