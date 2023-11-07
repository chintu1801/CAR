<html>
<head><title>CUSTOMER MASTER</title></head>
<body bgcolor="#D7DF01">
<center>
<h1>CUSTOMER MASTER</h1>
<table border="1">
<?php

if(isset ($_POST['Delete']))
{
     
    $C_ID=$_POST['C_ID'];
    $C_Name=$_POST['C_Name'];
    $C_Add=$_POST['C_Add'];
    $C_mobile_No=$_POST['C_mobile_No'];
    $C_Email=$_POST['C_Email'];
     $C_Vehicle_No=$_POST['C_Vehicle_No'];
      $C_Vehicle_Name=$_POST['C_Vehicle_Name'];
    

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="delete from customer_mast where Customer_ID='$C_ID'"; 
if(mysql_query($sql,$con))
{
    echo "Record Deleted Successfully";
}
else
{
    
   echo "Record Not Deleted Successfully";
   } 
mysql_close($con);



}

header("location:CustomerMasterDelete.php");
?>
</center>
</body>
</html>