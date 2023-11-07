<!DOCTYPE HTML>
<html>
<head>
	
	<title>ITEM ISSUE REPORT</title>
    
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

<h1 class="impact" style="color:white;"><b>ITEM ISSUE</b></h1>
<h1 class="impact" style="color:white;"><b>Item Issue Report</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


</head>

<body bgcolor="">


<tr>
<th>Issue No </th>
<th>item code</th>
<th>item iname</th>
<th>Job Card No</th>
<th>UOM</th>
<th>item Qty</th>
<th>item Rate</th>
<th>item Value</th>
<th>item Warranty</th>
<th>issue Date</th>

</tr>

<?php

$con=mysql_connect("localhost","root","");
//if($con)

    //echo "Connection Successful"."<br/>";


mysql_selectdb("carcare");
$sql="select * from item_issue";
$result=mysql_query($sql,$con);

while($row= mysql_fetch_array($result))
{

    $ino=$row['I_No'];
    $icode=$row['I_Code'];
    $issuename=$row['Issue_Iname'];
    $jobcardno=$row['jobcardno'];
    $UOM=$row['Issue_Unit_Meansure'];
    $qty=$row['Issue_Qty'];    
    $rate=$row['Issue_Rate'];
    $value=$row['Issue_Value'];
    $warrantyr=$row['Warranty_Year'];
    $idate=$row['IssueDate'];
?>
<tr>
<td><?php echo $ino;?></td>
<td><?php echo $icode;?></td>
<td><?php echo $issuename;?></td>
<td><?php echo $jobcardno;?></td>
<td><?php echo $UOM;?></td>
<td><?php echo $qty;?></td>
<td><?php echo $rate;?></td>
<td><?php echo $value;?></td>
<td><?php echo $warrantyr;?></td>
<td><?php echo $idate;?></td>

</tr>




<?php
}
    mysql_close($con);

?>

</body>
</html>