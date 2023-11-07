<?php

if(isset ($_POST['Delete']))
{
     
    $uJob_No=$_POST['D1'];
    $uPart_Code=$_POST['D2'];
    $uPart_Name=$_POST['D3'];
    $uQuantity=$_POST['D4'];
    $uRate=$_POST['D5'];
    $uGST_Rate=$_POST['D6'];
    $uDiscount=$_POST['D7'];
    $uBilling_Type=$_POST['D8'];
    $uAmount1=($uQuantity*$uRate);
$uAmount2=($$uAmount1*$uGST_Rate/100);
$uGST_Amount=$uAmount1+$uAmount2-$uDiscount;
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="delete from partsdetail where Job_No='$uJob_No'"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record Deleted Successfully";

}

header("location:PartsDetaildelete.php");
?>