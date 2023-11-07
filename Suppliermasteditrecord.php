<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>SUPPLIER MASTER</title>
    
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


<tr>
<th>Supplier Code</th>
<th>Supplier Name</th>
<th>Supplier Address</th>
<th>Mobile No.</th>
<th>Email</th>
<th>Action</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
echo "Connection successful";
mysql_selectdb("carcare");
$sql="select * from suppliermast";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{

    $SupplierCode=$row['SupplierCode'];
    $SupplierName=$row['SupplierName'];
    $SupplierAddress=$row['SupplierAddress'];
    $MobileNo=$row['MobileNo'];
    $Email=$row['Email'];

?>
<tr>
<td><?php echo $SupplierCode;?></td>
<td><?php echo $SupplierName;?></td>
<td><?php echo $SupplierAddress;?></td>
<td><?php echo $MobileNo;?></td>
<td><?php echo $Email;?></td>
<td><a href="Suppliermastdetailrecord.php?SupplierCode=<?php echo $SupplierCode;?>">Edit</a></td>
</tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
