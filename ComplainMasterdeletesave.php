<?php

if(isset ($_POST['Delete']))
{
     
    $Complain_Id=$_POST['D1'];
    $Complain_Des=$_POST['D2'];
    $Bay_No=$_POST['D3'];
    
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="delete from complainmaster where Complain_Id='$Complain_Id'"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record Deleted Successfully";

}

//header("location:ComplainMasterdelete.php");
?>