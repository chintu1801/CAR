<?php

if(isset ($_POST['Delete']))
{
     
    $Username=$_POST['D1'];
    $MailId=$_POST['D2'];
    $Password=$_POST['D3'];
    $Confirmpassword=$_POST['D4'];
    $CatagoryName=$_POST['D5'];
    $SecurityQuestion=$_POST['D6'];
    $SecurityAnswer=$_POST['D7'];
    $Dob=$_POST['D8'];

$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="delete from registration where Username='$Username'"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record deleted Successfully";

}

header("location:Registrationdelete.php");
?>