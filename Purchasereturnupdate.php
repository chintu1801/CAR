
<?php

if(isset($_POST['Update']))
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

$sql="update purchasereturn set PurchaseReturnDate='$PurchaseReturnDate', SupplierCode='$SupplierCode', SupplierName='$SupplierName', SupplierAddress='$SupplierAddress', GstRate=$GstRate, GstAmount=$GstAmount, TinCode='$TinCode', ItemCode='$ItemCode',ItemName='$ItemName', UnitMeasure='$UnitMeasure', Quantity=$Quantity where PurchaseReturnNo=$PurchaseReturnNo";
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
header("location:Purchasereturneditrecord.php")
?>



