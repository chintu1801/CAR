<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>PURCHASE RETURN REPORT</title>

 
    
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

<h1 align="center"class="impact" style="color:white;"><b>PURCHASE RETURN</b></h1>
<h1 align="center" class="impact" style="color:white;"><b>Purchase Return Report</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>Purchase Return No</th>
<th>Purchase Return No</th>
<th>Supplier Code</th>
<th>Supplier Name</th>
<th>Supplier Address</th>
<th>Gst Rate</th>
<th>Gst Amount</th>
<th>Tin Code</th>
<th>Item Code</th>
<th>Item Name</th>
<th>Unit Measure</th>
<th>Quantity</th>

</tr>
<?php
$con=mysql_connect("localhost","root","");
//echo "Connection successful";
mysql_selectdb("carcare");
$sql="select * from purchasereturn";
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
    $Quantity=$row['Quantity']
?>
<tr>
<td><?php echo $PurchaseReturnNo;?></td>
<td><?php echo $PurchaseReturnDate;?></td>
<td><?php echo $SupplierCode;?></td>
<td><?php echo $SupplierName;?></td>
<td><?php echo $SupplierAddress;?></td>
<td><?php echo $GstRate;?></td>
<td><?php echo $GstAmount;?></td>
<td><?php echo $TinCode;?></td>
<td><?php echo $ItemCode;?></td>
<td><?php echo $ItemName;?></td>
<td><?php echo $UnitMeasure;?></td>
<td><?php echo $Quantity;?></td>

</tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
