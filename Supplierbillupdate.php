
<?php

if(isset($_POST['Update']))
{
    $SupplierBill=$_POST['SupplierBill'];
    $BillDate=$_POST['BillDate'];
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $Gst=$_POST['Gst'];
    $GstCode=$_POST['GstCode'];
    $FreightCharges=$_POST['FreightCharges'];
    $Done=$_POST['Done'];
    $PaymentMode=$_POST['PaymentMode'];
    $Amount=$_POST['Amount'];
    $TotalAmount=$_POST['TotalAmount'];



$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected"."<br/>";
}
mysql_select_db("carcare");

$sql="update supplierbill set BillDate='$BillDate',SupplierCode='$SupplierCode',SupplierName='$SupplierName',Gst=$Gst,GstCode='$GstCode',FreightCharges=$FreightCharges,Done='$Done',PaymentMode='$PaymentMode',Amount=$Amount,TotalAmount=$TotalAmount where SupplierBill=$SupplierBill";
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
header("location:Supplierbilleditrecord.php");
?>



