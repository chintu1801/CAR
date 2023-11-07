<html>
<head><title>UPDATE DETAILS</title></head>
<body bgcolor="#D7DF01">
<center>
<h1>PARTS EDIT DETAILS</h1>
<table border="1">
<?php

if(isset ($_POST['Submit']))
{
     
    $uJob_No=$_POST['D1'];
    $uPart_Code=$_POST['D2'];
    $uPart_Name=$_POST['D3'];
    $uQuantity=$_POST['D4'];
    $uRate=$_POST['D5'];
    $uGST_Rate=$_POST['D6'];
    $uDiscount=$_POST['D7'];
    $uBilling_Type=$_POST['D8'];
    echo $uRate,$uDiscount;
    $uAmount1=($uQuantity*$uRate);echo $uAmount1;
    $uAmount2=(($uAmount1*$uGST_Rate)/100); echo $uAmount2;
$uGST_Amount=$uAmount1+$uAmount2-$uDiscount;
    
    


$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="update partsdetail set Part_Code='$uPart_Code',Part_Name='$uPart_Name',Quantity=$uQuantity,Rate=$uRate,GST_Rate=$uGST_Rate,Discount=$uDiscount,Billing_Type='$uBilling_Type',Amount=$uGST_Amount where Job_No='$uJob_No'"; 
if(mysql_query($sql,$con))
{
    echo "Record Updated Successfully";
}
else
{
    
   echo "Record Updated Successfully";
   } 
mysql_close($con);



}

//header("location:PartsDetailEdit.php");
?>
</center>
</body>
</html>