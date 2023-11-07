
<?php

if(isset($_POST['Delete']))
{
   $PONo=$_POST['PONo'];
    $PODt=$_POST['PODt'];
    $SuppCode=$_POST['SuppCode'];
    $SuppName=$_POST['SuppName'];
    $SuppAdd=$_POST['SuppAdd'];
    $GST=$_POST['GST'];
    $TIN=$_POST['TIN'];
    $Aadhar=$_POST['Aadhar'];
    $ItemCode=$_POST['ItemCode'];
    $Qty=$_POST['Qty'];
    $Amount=$_POST['Amount'];



$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected"."<br/>";
}
mysql_select_db("carcare");

$sql="delete from purchaseorder where PONo=$PONo";
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
header("location:Purchaseorderdeleterecord.php");
?>



