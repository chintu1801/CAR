<?php

if(isset($_POST['Submit']))
{

    $Service_Code=$_POST['Service_Code'];
    $Service_Name=$_POST['Service_Name'];
    $Service_Type=$_POST['Service_Type'];
    $Service_Charge=$_POST['Service_Charge'];


$con=mysql_connect("localhost","root","");
if($con)
{
    echo"connection successfull"."</br>";
}
else{
    echo "not connected"."</br>";
}
mysql_select_db("carcare");
$sql="insert into servicemaster value('$Service_Code','$Service_Name','$Service_Type','$Service_Charge')";
mysql_query($sql,$con);

mysql_close($con);

echo"Data Inserted Succesfully"."</br>";
}

?>