<?php

if(isset($_POST['Submit']))
{
    
    $Complain_Id=$_POST['Complain_Id'];
    $Complain_Des=$_POST['Complain_Des'];
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
$sql="insert into complainmaster value('$Complain_Id','$Complain_Des','$Bay_No')";
mysql_query($sql,$con);

mysql_close($con);

echo"Data Inserted Succesfully"."</br>";
}




?>