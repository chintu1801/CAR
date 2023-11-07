<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>JOB CARD REPORT</title>
    
     <--
  <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  -->
  
    
</head>
<body bgcolor="">
<center>
<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>JOB CARD</b></h1>
<h1 class="impact" style="color:white;"><b>Job Card Report</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>JobCart_No</th>
<th>Customer_Id</th>
<th>Customer_Name</th>
<th>Customer_Address</th>
<th>Mobile_No</th>
<th>Model_Name</th>
<th>Vehicle_Name</th>
<th>Vehicle_No</th>
<th>JobCart_Date</th>
<th>Fuel</th>
<th>Date_Time_In</th>
<th>Date_Time_Out</th>
<th>Job_Allocation</th>
<th>Kms</th>
<th>Complain_Id</th>
<th>Complain_Des</th>
<th>Bay_No</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");
/*if($con)
{
    echo "Connected to MySQL"."<br/>";
}*/
mysql_selectdb("carcare");
$sql="select * from jobcart";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
   $D_JobCart_No=$row['JobCart_No'];
   $D_Customer_Id=$row['Customer_Id'];
   $D_Customer_Name=$row['Customer_Name'];
   $D_Customer_Address=$row['Customer_Address'];
   $D_Mobile_No=$row['Mobile_No'];
   $D_Model_Name=$row['Model_Name'];
   $D_Vehicle_Name=$row['Vehicle_Name'];
   $D_Vehicle_No=$row['Vehicle_No'];
   $D_JobCart_Date=$row['JobCart_Date'];
   $D_Fuel=$row['Fuel'];
   $D_Date_Time_In=$row['Date_Time_In'];
   $D_Date_Time_Out=$row['Date_Time_Out'];
   $D_Job_Allocation=$row['Job_Allocation'];
   $D_Kms=$row['Kms'];
   $D_Complain_Id=$row['Complain_Id'];
   $D_Complain_Des=$row['Complain_Des'];
   $D_Bay_No=$row['Bay_No'];


?>

<tr>
<td><?php echo $D_JobCart_No;?></td>
<td><?php echo $D_Customer_Id;?></td>
<td><?php echo $D_Customer_Name;?></td>
<td><?php echo $D_Customer_Address;?></td>
<td><?php echo $D_Mobile_No;?></td>
<td><?php echo $D_Model_Name;?></td>
<td><?php echo $D_Vehicle_Name;?></td>
<td><?php echo $D_Vehicle_No;?></td>
<td><?php echo $D_JobCart_Date;?></td>
<td><?php echo $D_Fuel;?></td>
<td><?php echo $D_Date_Time_In;?></td>
<td><?php echo $D_Date_Time_Out;?></td>
<td><?php echo $D_Job_Allocation;?></td>
<td><?php echo $D_Kms;?></td>
<td><?php echo $D_Complain_Id;?></td>
<td><?php echo $D_Complain_Des;?></td>
<td><?php echo $D_Bay_No;?></td>



</tr>

<?php
}
mysql_close($con);
?>

}
</table>
</body>
</html>
