
<?php

if(isset($_POST['Update']))
{
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $SupplierAddress=$_POST['SupplierAddress'];
    $MobileNo=$_POST['MobileNo'];
    $Email=$_POST['Email'];


echo $SupplierCode, $SupplierName,$SupplierAddress;

$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected"."<br/>";
}
mysql_select_db("carcare");

$sql="update suppliermast set SupplierName='$SupplierName',SupplierAddress='$SupplierAddress',MobileNo=$MobileNo,Email='$Email' where SupplierCode='$SupplierCode'";
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
header("location:Suppliermasteditrecord.php");
?>



