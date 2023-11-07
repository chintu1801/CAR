<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>SUPPLIER BILL</title>
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

<h1 class="impact" style="color:white;"><b>SUPPLIER BILL</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php

$SupplierBill=$_GET['SupplierBill'];
$con=mysql_connect("localhost","root","");
mysql_selectdb("carcare");
$sql="select * from supplierbill where SupplierBill='$SupplierBill'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    
    $SupplierBill=$row['SupplierBill'];
    $BillDate=$row['BillDate'];
    $SupplierCode=$row['SupplierCode'];
    $SupplierName=$row['SupplierName'];
    $Gst=$row['Gst'];
    $GstCode=$row['GstCode'];
    $FreightCharges=$row['FreightCharges'];
    $Done=$row['Done'];
    $PaymentMode=$row['PaymentMode'];
    $Amount=$row['Amount'];
    $TotalAmount=$row['TotalAmount'];   
}
?>
<form method="POST" action="Supplierbilldelete.php">

<tr>
<td>SupplierBill</td>
<td><input type="text" name="SupplierBill" value="<?php echo $SupplierBill;?>"/></td>
</tr>
<tr>
<td>BillDate</td>
<td><input type="text" name="BillDate" value="<?php echo $BillDate;?>"/></td>
</tr>
<tr>
<td>SupplierCode</td>
<td><input type="text" name="SupplierCode" value="<?php echo $SupplierCode;?>"/></td>
</tr>
<tr>
<td>SupplierName</td>
<td><input type="text" name="SupplierName" value="<?php echo $SupplierName;?>"/></td>
</tr>
<tr>
<td>Gst</td>
<td><input type="text" name="Gst" value="<?php echo $Gst;?>"/></td>
</tr>
<tr>
<td>GstCode</td>
<td><input type="text" name="GstCode" value="<?php echo $GstCode;?>"/></td>
</tr>
<tr>
<td>FreightCharges</td>
<td><input type="text" name="FreightCharges" value="<?php echo $FreightCharges;?>"/></td>
</tr>
<tr>
<td>Done</td>
<td><input type="text" name="Done" value="<?php echo $Done;?>"/></td>
</tr>
<tr>
<td>PaymentMode</td>
<td><input type="text" name="PaymentMode" value="<?php echo $PaymentMode;?>"/></td>
</tr>
<tr>
<tr>
<td>Amount</td>
<td><input type="text" name="Amount" value="<?php echo $Amount;?>"/></td>
</tr>
<tr>
<td>TotalAmount</td>
<td><input type="text" name="TotalAmount" value="<?php echo $TotalAmount;?>"/></td>
</tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Delete" value="Delete"/></td>
</tr>
</table>
</form> 
<?php
mysql_close($con);
?>
</body>
</html>