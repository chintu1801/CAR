
<?php

if(isset($_POST['Delete']))
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

$sql="delete from suppliermast where SupplierCode='$SupplierCode'";
if(mysql_query($sql,$con))
{
echo "record deleted succesfully";
}
else
{
  echo "Something went wrong update fails...!!!";
}
mysql_close($con);
}
header("location:Suppliermastdeleterecord.php");
?>



