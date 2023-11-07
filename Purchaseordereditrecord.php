<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>PURCHASE ORDER</title>
 
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


<tr>
<th>Order No.</th>
<th>Order Date</th>
<th>Supplier Code</th>
<th>Supplier Name</th>
<th>Supplier Address</th>
<th>GST</th>
<th>TIN</th>
<th>Aadhar Card</th>
<th>Item Code</th>
<th>Qty</th>
<th>Amount</th>
<th>Action</th>
</tr>


<?php
$con=mysql_connect("localhost","root","");
echo "Connection successful";
mysql_selectdb("carcare");
$sql="select * from purchaseorder";
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

?>
<tr>
<td><?php echo $PONo;?></td>
<td><?php echo $PODt;?></td>
<td><?php echo $SuppCode;?></td>
<td><?php echo $SuppName;?></td>
<td><?php echo $SuppAdd;?></td>
<td><?php echo $GST?></td>
<td><?php echo $TIN;?></td>
<td><?php echo $Aadhar;?></td>
<td><?php echo $ItemCode;?></td>
<td><?php echo $Qty;?></td>
<td><?php echo $Amount;?></td>
<td><a href="Purchaseorderdetailrecord.php?PONo=<?php echo $PONo;?>">Edit</a></td>
</tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
