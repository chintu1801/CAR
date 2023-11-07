
<?php

if(isset($_POST['Delete']))
{
    $EmpId=$_POST['EmpId'];
    $EmpName=$_POST['EmpName'];
    $EmpCategoryCode=$_POST['EmpCategoryCode'];
    $EmpCategoryName=$_POST['EmpCategoryName'];
    $EmpAddress=$_POST['EmpAddress'];
    $EmpCity=$_POST['EmpCity'];
    $EmpState=$_POST['EmpState'];
    $EmpPincode=$_POST['EmpPincode'];
    $EmpGender=$_POST['EmpGender'];
    $EmpEmailId=$_POST['EmpEmailId'];
    $EmpLicenseNo=$_POST['EmpLicenseNo'];


echo $EmpId, $EmpCity,$EmpLicenseNo;

$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected"."<br/>";
}
mysql_select_db("carcare");

$sql="delete from employee where EmpId='$EmpId'";
if(mysql_query($sql,$con))
{
echo "record Deleted succesfully";
}
else
{
  echo "Something went wrong DELETE  fails...!!!";
}
mysql_close($con);
}
header("Location:Employeedeleterecord.php");
?>



