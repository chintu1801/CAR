<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  echo "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $cid=$_POST['Customer_Id'];
   echo $cid;
   $sql0 = "select Customer_Name,Customer_Address,Customer_mobile_No,Customer_Vehicle_No,Customer_Vehicle_Name from customer_mast where Customer_ID='$cid'";
    $query = mysql_query($sql0,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  //  $JCustomer_Id = $rs['Customer_ID'];
    $JCustomer_Name = $rs['Customer_Name'];
    $JCustomer_Address = $rs['Customer_Address'];
    $JMobile_No=$rs['Customer_mobile_No'];
      $JVehicle_Name=$rs['Customer_Vehicle_Name'];
    $JVehicle_No=$rs['Customer_Vehicle_No'];
 
 
// echo $JCustomer_Id,$JMobile_No,$JVehicle_Name,$Jkms."<br>";  
    }
    
    
  
}
}

?>


<?php

    if(isset($_POST['Submit']))
{
   $JobCart_No=$_POST['JobCart_No'];
   
   $Model_Name=$_POST['Model_Name'];
   $JobCart_Date=$_POST['JobCart_Date'];
   $Fuel=$_POST['Fuel'];
   $Date_Time_In=$_POST['Date_Time_In'];
   $Date_Time_Out=$_POST['Date_Time_Out'];
   $Job_Allocation=$_POST['JobAllocatedto'];
   $Kms=$_POST['Kms'];
   $Complain_Id=$_POST['ComplainID'];
   $Complain_Des=$_POST['ComplainDescription'];
   $Bay_No=$_POST['Bay_No'];
    
$con=mysql_connect("localhost","root","");
if($con)
{
    echo"connection successfull"."</br>";
}
else{
    echo "not connected"."</br>";
}
mysql_select_db("carcare");
$sql="insert into jobcart values('$JobCart_No','$cid ','$JCustomer_Name','$JCustomer_Address',$JMobile_No,'$Model_Name','$JVehicle_Name','$JVehicle_No','$JobCart_Date',$Fuel,'$Date_Time_In','$Date_Time_Out','$Job_Allocation',$Kms,'$Complain_Id','$Complain_Des',$Bay_No)";
mysql_query($sql,$con);

mysql_close($con);

echo"Data Inserted Succesfully"."</br>";
}


?>