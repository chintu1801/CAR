<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>PURCHASE RETURN</title>

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

<h1 class="impact" style="color:white;"><b>PURCHASE RETURN</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$PurchaseReturnNo=$_GET['PurchaseReturnNo'];
$con=mysql_connect("localhost","root","");
mysql_selectdb("carcare");
$sql="select * from purchasereturn where PurchaseReturnNo='$PurchaseReturnNo'";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    
    $PurchaseReturnNo=$row['PurchaseReturnNo'];
    $PurchaseReturnDate=$row['PurchaseReturnDate'];
    $SupplierCode=$row['SupplierCode'];
    $SupplierName=$row['SupplierName'];
    $SupplierAddress=$row['SupplierAddress'];
    $GstRate=$row['GstRate'];
    $GstAmount=$row['GstAmount'];
    $TinCode=$row['TinCode'];
    $ItemCode=$row['ItemCode'];
    $ItemName=$row['ItemName'];
    $UnitMeasure=$row['UnitMeasure'];
    $Quantity=$row['Quantity'];    
}
?>
<form method="POST" action="Purchasereturndelete.php">


<tr>
<td>PurchaseReturnNo</td>
<td><input type="text" name="PurchaseReturnNo" value="<?php echo $PurchaseReturnNo;?>"/></td>
</tr>
<tr>
<td>PurchaseReturnDate</td>
<td><input type="text" name="PurchaseReturnDate" value="<?php echo $PurchaseReturnDate;?>"/></td>
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
<td>SupplierAddress</td>
<td><input type="text" name="SupplierAddress" value="<?php echo $SupplierAddress;?>"/></td>
</tr>
<tr>
<td>GstRate</td>
<td><input type="text" name="GstRate" value="<?php echo $GstRate;?>"/></td>
</tr>
<tr>
<td>GstAmount</td>
<td><input type="text" name="GstAmount" value="<?php echo $GstAmount;?>"/></td>
</tr>
<tr>
<td>TinCode</td>
<td><input type="text" name="TinCode" value="<?php echo $TinCode;?>"/></td>
</tr>
<tr>
<td>ItemCode</td>
<td><input type="text" name="ItemCode" value="<?php echo $ItemCode;?>"/></td>
</tr>
<tr>
<td>ItemName</td>
<td><input type="text" name="ItemName" value="<?php echo $ItemName;?>"/></td>
</tr>
<tr>
<tr>
<td>UnitMeasure</td>
<td><input type="text" name="UnitMeasure" value="<?php echo $UnitMeasure;?>"/></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name="Quantity" value="<?php echo $Quantity;?>"/></td>
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
</body>
</html>