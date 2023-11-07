
<?php

if(isset($_POST['Delete']))
{
    $PurchaseReturnNo=$_POST['PurchaseReturnNo'];
    $PurchaseReturnDate=$_POST['PurchaseReturnDate'];
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $SupplierAddress=$_POST['SupplierAddress'];
    $GstRate=$_POST['GstRate'];
    $GstAmount=$_POST['GstAmount'];
    $TinCode=$_POST['TinCode'];
    $ItemCode=$_POST['ItemCode'];
    $ItemName=$_POST['ItemName'];
    $UnitMeasure=$_POST['UnitMeasure'];
    $Quantity=$_POST['Quantity']; 



$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected"."<br/>";
}
mysql_select_db("carcare");

$sql="delete from purchasereturn where PurchaseReturnNo=$PurchaseReturnNo";

if(mysql_query($sql,$con))
{
echo "record deleted succesfully";
}
else
{
  echo "Something went wrong delete fails...!!!";
}
mysql_close($con);
}
header("location:Purchasereturndeleterecord.php");
?>



