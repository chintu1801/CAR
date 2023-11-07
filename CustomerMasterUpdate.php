<html>
<head><title>CUSTOMER MASTER</title></head>
<body bgcolor="#D7DF01">
<center>
<h1>CUSTOMER MASTER</h1>
<table border="1">
<?php

if(isset($_POST['Submit']))
{
     
    $C_ID=$_POST['C_ID'];
    $C_Name=$_POST['C_Name'];
    $C_Add=$_POST['C_Add'];
    $C_mobile_No=$_POST['C_mobile_No'];
    $C_Email=$_POST['C_Email'];
     $C_Vehicle_No=$_POST['C_Vehicle_No'];
      $C_Vehicle_Name=$_POST['C_Vehicle_Name'];
    
echo $C_ID,$C_mobile_No,$C_Vehicle_Name;
echo "<br/>";
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="update customer_mast set Customer_Name='$C_Name',Customer_Address='$C_Add',Customer_mobile_NO=$C_mobile_No,Customer_Email='$C_Email',Customer_Vehicle_NO='$C_Vehicle_No',Customer_Vehicle_Name='$C_Vehicle_Name' where Customer_ID='$C_ID' "; 
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

header("location:CustomerMasterEdit.php");
?>
</center>
</body>
</html>