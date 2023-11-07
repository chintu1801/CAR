<?php

if(isset ($_POST['Delete']))
{
     
    $Service_Code=$_POST['D1'];
    $Service_Name=$_POST['D2'];
    $Service_Type=$_POST['D3'];
    $Service_Charge=$_POST['D4'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="delete from servicemaster where Service_Code='$Service_Code'"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record deleted Successfully";

}

header("location:ServiceMasterdelete.php");
?>