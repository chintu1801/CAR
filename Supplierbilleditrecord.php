<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>SUPPLIER BILL</title>
 
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
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>Supplier Bill</th>
<th>Bill Date</th>
<th>Supplier Code</th>
<th>Supplier Name</th>
<th>Gst</th>
<th>Gst Code</th>
<th>Freight Charges</th>
<th>Done</th>
<th>Payment Mode</th>
<th>Amount</th>
<th>Total Amount</th>
<th>Action</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
echo "Connection successful";
mysql_selectdb("carcare");
$sql="select * from supplierbill";
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

?>
<tr>
<td><?php echo $SupplierBill;?></td>
<td><?php echo $BillDate;?></td>
<td><?php echo $SupplierCode;?></td>
<td><?php echo $SupplierName;?></td>
<td><?php echo $Gst;?></td>
<td><?php echo $GstCode;?></td>
<td><?php echo $FreightCharges;?></td>
<td><?php echo $Done;?></td>
<td><?php echo $PaymentMode;?></td>
<td><?php echo $Amount;?></td>
<td><?php echo $TotalAmount;?></td>
<td><a href="Supplierbilldetailrecord.php?SupplierBill=<?php echo $SupplierBill;?>">Edit</a></td>
</tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
