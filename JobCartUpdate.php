<?php

if(isset ($_POST['Submit']))
{
     
    $JobCart_No=$_POST['D1'];
    $Customer_Id=$_POST['D2'];
    $Customer_Name=$_POST['D3'];
    $Customer_Address=$_POST['D4'];
    $Mobile_No=$_POST['D5'];
    $Model_Name=$_POST['D6'];
    $Vehicle_Name=$_POST['D7'];
    $Vehicle_No=$_POST['D8'];
    $JobCart_Date=$_POST['D9'];
    $Fuel=$_POST['D10'];
    $Date_Time_In=$_POST['D11'];
    $Date_Time_Out=$_POST['D12'];
    $Job_Allocation=$_POST['D13'];
    $Kms=$_POST['D14'];
    $Complain_Id=$_POST['D15'];
    $Complain_Des=$_POST['D16'];
    $Bay_No=$_POST['D17'];
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="update jobcart set JobCart_No='$JobCart_No',Customer_Id='$Customer_Id',Customer_Name='$Customer_Name',Customer_Address='$Customer_Address',Mobile_No=$Mobile_No,Model_Name='$Model_Name',Vehicle_Name='$Vehicle_Name',Vehicle_No='$Vehicle_No',JobCart_Date='$JobCart_Date',Fuel=$Fuel,Date_Time_In='$Date_Time_In',Date_Time_Out='$Date_Time_Out',Job_Allocation='$Job_Allocation',Kms=$Kms,Complain_Id='$Complain_Id',Complain_Des='$Complain_Des',Bay_No=$Bay_No where JobCart_No='$JobCart_No'"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record Updated Successfully";

}

header("location:JobCartEdit.php");
?>