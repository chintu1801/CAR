<?php


if(isset($_POST['Submit']))
{
    $Usertype=$_POST['Usertype'];
   $Username=$_POST['UserName'];
   $MailId=$_POST['MailId'];
   $Password=$_POST['Password'];
   $Confirmpassword=$_POST['ConfirmPassword'];
   $CatagoryName=$_POST['CatagoryName'];
   $SecurityQuestion=$_POST['SecurityQuestion'];
   $SecurityAnswer=$_POST['SecurityAnswer'];
   $Dob=$_POST['Dob'];
    
$con=mysql_connect("localhost","root","");
if($con)
{
    echo"connection successfull"."</br>";
}
else{
    echo "not connected"."</br>";
}
mysql_select_db("carcare");
$sql="insert into registration values('$Usertype','$Username','$MailId','$Password','$Confirmpassword','$CatagoryName','$SecurityQuestion','$SecurityAnswer','$Dob')";

if(mysql_query($sql,$con))
{
    echo"Data Inserted Succesfully"."</br>";
    header("location:login.html");    
}
else
{
    echo"Data Not Inserted "."</br>"; 
    header("location:index.html");      
}
mysql_close($con);



}
 ?>

