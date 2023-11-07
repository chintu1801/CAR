<!DOCTYPE HTML>
<html>
<head>

	<title>ITEM RETURN</title>
     

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

<h1 class="impact" style="color:white;"><b>ITEM RETURN</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr>
<th>Return Sr. No</th>
<th>item code</th>
<th>item iname</th>
<th>Job Card No</th>
<th>UOM</th>
<th>item Qty</th>
<th>item Rate</th>
<th>item Value</th>
<th>item Warranty</th>
<th>issue Date</th>
<th>Action</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
if($con)

    echo "Connection Successful"."<br/>";


mysql_selectdb("carcare");
$sql="select * from item_return";
$result=mysql_query($sql,$con);

while($row= mysql_fetch_array($result))
{

    $Rcode=$row['Receipt_Code'];
    $Rtcode=$row['Return_Code'];
    $Rname=$row['Return_Name'];
    $jobcardno=$row['jobcardno'];
    $UOM=$row['Unit_Meansure'];
    $qty=$row['Qty'];    
    $rate=$row['Rate'];
    $value=$row['Value'];
    $warrantyr=$row['Warranty_Year'];
    $Rdate=$row['Return_Date'];
?>
<tr>
<td><?php echo $Rcode;?></td>
<td><?php echo $Rtcode;?></td>
<td><?php echo $Rname;?></td>
<td><?php echo $jobcardno;?></td>
<td><?php echo $UOM;?></td>
<td><?php echo $qty;?></td>
<td><?php echo $rate;?></td>
<td><?php echo $value;?></td>
<td><?php echo $warrantyr;?></td>
<td><?php echo $Rdate;?></td>
<td><a href="itemreturneditdetails.php?Receipt_Code=<?php echo $Rcode;?>">Edit</a></td>
</tr>




<?php
}
    mysql_close($con);

?>

</body>
</html>