<?php

if(isset($_POST['Submit']))
{
    
    $Job_No=$_POST['Job_No'];
    $Part_Code=$_POST['Part_Code'];
    $Part_Name=$_POST['Part_Name'];
    $Quantity=$_POST['Quantity'];
    $Rate=$_POST['Rate'];
     $GST_Rate=$_POST['GST_Rate'];
      $Discount=$_POST['Discount'];
       $Billing_Type=$_POST['Billing_Type'];
       $GSTAMT=($Rate*$GST_Rate)/100;
        $Amount=$Rate+$GSTAMT-$Discount;
        

$con=mysql_connect("localhost","root","");
if($con)
{
    echo"connection successfull"."</br>";
}
else{
    echo "not connected"."</br>";
}
mysql_select_db("carcare");
$sql="insert into partsdetail values('$Job_No','$Part_Code','$Part_Name',$Quantity,$Rate,$GST_Rate,$GSTAMT,$Discount,'$Billing_Type',$Amount)";
mysql_query($sql,$con);

mysql_close($con);

echo"Data Inserted Succesfully"."</br>";
}

?>