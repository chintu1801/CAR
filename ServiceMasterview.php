<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>SERVICE MASTER REPORT</title>
    
    

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

<h1 class="impact" style="color:white;"><b>SERVICE MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>Service Master Report</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr>
<th>Service_Code</th>
<th>Servie_Name</th>
<th>Service_Type</th>
<th>Service_Charge</th>


</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
   // echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");
$sql="select * from servicemaster";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
    $D_Service_Code=$row['Service_Code'];
    $D_Service_Name=$row['Service_Name'];
    $D_Service_Type=$row['Service_Type'];
    $D_Service_Charge=$row['Service_Charge'];
   
?>

<tr>
<td><?php echo $D_Service_Code;?></td>
<td><?php echo $D_Service_Name;?></td>
<td><?php echo $D_Service_Type;?></td>
<td><?php echo $D_Service_Charge;?></td>


</tr>

<?php
}
mysql_close($con);
?>
</table>
</center>
</body>
</html>
