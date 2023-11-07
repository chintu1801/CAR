<html>
<head><title>UPDATE DETAILS</title></head>
<body bgcolor="#D7DF01">
<center>
<h1>SERVICE MASTER EDIT DETAILS</h1>
<table border="1">

<?php

if(isset ($_POST['Submit']))
{
     
    $uService_Code=$_POST['D1'];
    $uService_Name=$_POST['D2'];
    $uService_Type=$_POST['D3'];
    $uService_Charge=$_POST['D4'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="update servicemaster set Service_Name='$uService_Name',Service_Type='$uService_Type',Service_Charge=$uService_Charge where Service_Code=$uService_Code"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record Updated Successfully";

}

header("location:ServiceMasterEdit.php");
?>