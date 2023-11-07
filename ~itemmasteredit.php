<html>
<head>
<title>IteM Master</title>
</head>
<body>
<h1>ITEM DETAILS</h1>
<table border="1">
<tr>
<th>Item Code  </th>
<th>Item Name</th>
<th>ABC Code</th>
<th>U.O.M. </th>
<th>Qauntity</th>
<th>Rate</th>
<th>Value</th>
<th>Gst_rate</th>
<th>Gst_amount</th>
<th>Mini_level</th>
<th>Max_level</th>
<th>War_gu</th>
<th>Action</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("carcare");
$sql="select * from item_master";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    $Icode=$row['I_code'];
    $Inm=$row['I_name'];
    $Iabc=$row['abc_code'];
    $Iuom=$row['Unit_meansure'];
    $Iqty=$row['Quantity'];
    $Irate=$row['Rate'];
    $IValue=$row['Value'];
    $IGSTrate=$row['Gts_rate'];
    $IGSTamount=$row['Gst_amount'];
    $Mini=$row['Mini_level'];
    $Max=$row['Max_level'];
    $War_gu=$row['War_gu'];
    
  ?>

<tr>
<td><?php echo $Icode;?></td>
<td><?php echo $Inm;?></td>
<td><?php echo $Iabc;?></td>
<td><?php echo $Iuom;?></td>
<td><?php echo $Iqty;?></td>
<td><?php echo $Irate;?></td>
<td><?php echo $IValue;?></td>
<td><?php echo $IGSTrate;?></td>
<td><?php echo $IGSTamount;?></td>
<td><?php echo $Mini;?></td>
<td><?php echo $Max;?></td>
<td><?php echo $War_gu;?></td>
<td><a href="itemmastereditdetails.php?I_code=<?php echo $Icode;?>">Edit</a></td>
</tr>


<?php
}
mysql_close($con);
?>
</body>
</html>
