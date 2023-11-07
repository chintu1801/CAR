
<html>
<head>
<title>CUSTOMER MASTER</title>

<style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>

</head>
<body bgcolor="#D7DF01">
<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>CUSTOMER MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>Customer_ID</th>
<th>Customer_Name</th>
<th>Customer_Add</th>
<th>Customer_mobile_No</th>
<th>Customer_Email</th>
<th>Customer_Vehicle_No</th>
<th>Customer_Vehicle_Name</th>
<th>Action</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    //echo "Connected to MySQL<br/>";
}
mysql_selectdb("carcare");
$sql="select * from customer_mast";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    $C_ID=$row['Customer_ID'];
    $C_Name=$row['Customer_Name'];
    $C_Add=$row['Customer_Address'];
    $C_mobile_No=$row['Customer_mobile_No'];
    $C_Email=$row['Customer_Email'];
     $C_Vehicle_No=$row['Customer_Vehicle_No'];
      $C_Vehicle_Name=$row['Customer_Vehicle_Name'];
?>

<tr>
<td><?php echo $C_ID;?></td>
<td><?php echo $C_Name;?></td>
<td><?php echo $C_Add;?></td>
<td><?php echo $C_mobile_No;?></td>
<td><?php echo $C_Email;?></td>
<td><?php echo $C_Vehicle_No;?></td>
<td><?php echo $C_Vehicle_Name;?></td>

<td><a href="CustomerMasterDeleteDetails.php?Customer_ID=<?php echo $C_ID;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

</table>
</center>
</body>
</html>
