<html>
<head>
<title> Employee Detail Record</title>

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


</head>

<body>
<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>
<h1 class="impact" style="color:white;"><b>EMPLOYEE</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>


<?php
$EmpId=$_GET['EmpId'];
$con=mysql_connect("localhost","root","");
mysql_selectdb("carcare");
$sql="select * from employee where EmpId='$EmpId'";
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
}
?>
<form name="Form1" method="POST" action="Employeeupdate.php">
 <table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<tr>
<td>EmpId</td>
<td><input type="text" name="EmpId" value="<?php echo $EmpId;?>"/></td>
</tr>
<tr>
<td>EmpName</td>
<td><input type="text" name="EmpName" value="<?php echo $EmpName;?>"/></td>
</tr>
<tr>
<td>EmpCategoryCode</td>
<td><input type="text" name="EmpCategoryCode" value="<?php echo $EmpCategoryCode;?>"/></td>
</tr>
<tr>
<td>EmpCategoryName</td>
<td><input type="text" name="EmpCategoryName" value="<?php echo $EmpCategoryName;?>"/></td>
</tr>
<tr>
<td>EmpAddress</td>
<td><input type="text" name="EmpAddress" value="<?php echo $EmpAddress;?>"/></td>
</tr>
<tr>
<td>EmpCity</td>
<td><input type="text" name="EmpCity" value="<?php echo $EmpCity;?>"/></td>
</tr>
<tr>
<td>EmpState</td>
<td><input type="text" name="EmpState" value="<?php echo $EmpState;?>"/></td>
</tr>
<tr>
<td>EmpPincode</td>
<td><input type="text" name="EmpPincode" value="<?php echo $EmpPincode;?>"/></td>
</tr>
<tr>
<td>EmpGender</td>
<td><input type="text" name="EmpGender" value="<?php echo $EmpGender;?>"/></td>
</tr>
<tr>
<tr>
<td>EmpEmailId</td>
<td><input type="text" name="EmpEmailId" value="<?php echo $EmpEmailId;?>"/></td>
</tr>
<tr>
<td>EmpLicenseNo</td>
<td><input type="text" name="EmpLicenseNo" value="<?php echo $EmpLicenseNo;?>"/></td>
</tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Update" value="Update"/>
</td>
</tr>
</table>
</form> 
<?php
mysql_close($con);
?>
</body>
</html>