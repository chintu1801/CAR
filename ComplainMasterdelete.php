<html>
<head>

<title>COMPLAIN MASTER</title>

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

<h1 class="impact" style="color:white;"><b>COMPLAIN MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>


<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<th>Complain_Id</th>
<th>Complain_Des</th>
<th>Bay_No</th>
<th>Action</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");
$sql="select * from complainmaster";
$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
    
    
   $D_Complain_Id=$row['Complain_Id'];
   $D_Complain_Des=$row['Complain_Des'];
   $D_Bay_No=$row['Bay_No'];
  

?>

<tr>
<td><?php echo $D_Complain_Id;?></td>
<td><?php echo $D_Complain_Des;?></td>
<td><?php echo $D_Bay_No;?></td>

<td><a href="ComplainMasterdeleteDetails.php?Complain_Id=<?php echo $D_Complain_Id;?>">Delete</a></td>
</tr>

<?php
}
mysql_close($con);
?>

}
</table>
</center>
</body>
</html>
