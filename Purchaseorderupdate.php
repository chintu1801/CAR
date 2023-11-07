
<?php

if(isset($_POST['Update']))
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

$sql="update purchaseorder set PODt='$PODt', SuppCode='$SuppCode', SuppName='$SuppName', SuppAdd='$SuppAdd', GST=$GST, TIN='$TIN', Aadhar='$Aadhar', ItemCode='$ItemCode', Qty=$Qty, Amount=$Amount where PONo=$PONo";
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
header("location:Purchaseordereditrecord.php");
?>



