<html>
<head>
<title>Delete Record</title>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
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
  <style>
.impact {
  font-family: Impact;
}
</style>


</head>

<body>
<center>
<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>
<h1 class="impact" style="color:white;"><b>Employee Details</b></h1>
  
<form name="Form1" method="POST" action="Employeedeletedetails.php">
    <table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<style>
    h3{
      font-family: Calibri; 
      font-size: 40pt;         
      font-style: normal; 
      font-weight: bold; 
      text-align: center; 
      text-decoration: underline
    }
</style>


<tr>
<th>Id</th>
<th>Name</th>
<th>Category Code</th>
<th>Category Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Pin Code</th>
<th>Gender</th>
<th>Email Id</th>
<th>LicenseNo</th>
<th>Action</th>
</tr>
<?php
$con=mysql_connect("localhost","root","");
echo "Connection successful";
mysql_selectdb("carcare");
$sql="select * from employee";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
{
    $EmpId=$row['EmpId'];
    $EmpName=$row['EmpName'];
    $EmpCategoryCode=$row['EmpCategoryCode'];
    $EmpCategoryName=$row['EmpCategoryName'];
    $EmpAddress=$row['EmpAddress'];
    $EmpCity=$row['EmpCity'];
    $EmpState=$row['EmpState'];
    $EmpPincode=$row['EmpPincode'];
    $EmpGender=$row['EmpGender'];
    $EmpEmailId=$row['EmpEmailId'];
    $EmpLicenseNo=$row['EmpLicenseNo'];

?>
<tr>
<td><?php echo $EmpId;?></td>
<td><?php echo $EmpName;?></td>
<td><?php echo $EmpCategoryCode;?></td>
<td><?php echo $EmpCategoryName;?></td>
<td><?php echo $EmpAddress;?></td>
<td><?php echo $EmpCity;?></td>
<td><?php echo $EmpState;?></td>
<td><?php echo $EmpPincode;?></td>
<td><?php echo $EmpGender;?></td>
<td><?php echo $EmpEmailId;?></td>
<td><?php echo $EmpLicenseNo;?></td>
<td><a href="Employeedeletedetails.php?EmpId=<?php echo $EmpId;?>">Delete</a></td>
</tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
