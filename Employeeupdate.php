
<?php

if(isset($_POST['Update']))
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

$sql="update employee set EmpId='$EmpId',EmpName='$EmpName',EmpCategoryCode='$EmpCategoryCode',EmpCategoryName='$EmpCategoryName',EmpAddress='$EmpAddress',EmpCity='$EmpCity',EmpState='$EmpState',EmpPincode=$EmpPincode,EmpGender='$EmpGender',EmpEmailId='$EmpEmailId',EmpLicenseNo='$EmpLicenseNo' where EmpId='$EmpId'";
if(mysql_query($sql,$con))
{
echo "record updated succesfully";
}
else
{
  echo "Something went wrong update fails...!!!";
}
mysql_close($con);
}
header("location:Employeeeditrecord.php");
?>



