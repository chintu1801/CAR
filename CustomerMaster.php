<?php

if(isset($_POST['Submit']))
{
    
    $C_ID=$_POST['Customer_ID'];
    $C_Name=$_POST['Customer_Name'];
    $CADD=$_POST['Customer_Address'];
    $C_Add=$_POST['Customer_Address'];
    $C_mobile_No=$_POST['Customer_mobile_No'];
    $C_Email=$_POST['Customer_Email'];
    $C_Vehicle_No=$_POST['Customer_Vehicle_No'];
    $C_Vehicle_Name=$_POST['Customer_Vehicle_Name'];
     
  
     

$con=mysql_connect("localhost","root","");
if($con)
{
    echo"connection successfull"."</br>";
}
else{
    echo "not connected"."</br>";
}
mysql_select_db("carcare");
$sql="insert into customer_mast values('$C_ID','$C_Name','$C_Add',$C_mobile_No,'$C_Email','$C_Vehicle_No','$C_Vehicle_Name')";
mysql_query($sql,$con);

mysql_close($con);

echo"Data Inserted Succesfully"."</br>";
}

?>