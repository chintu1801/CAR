
<?php

if(isset($_POST['Submit']))
{
    $SupplierCode=$_POST['SupplierCode'];
    $SupplierName=$_POST['SupplierName'];
    $SupplierAddress=$_POST['SupplierAddress'];
    $MobileNo=$_POST['MobileNo'];
    $Email=$_POST['Email'];
  
    
$con=mysql_connect("localhost","root","");
    if($con)
{
    echo "Connection Successfil.."."<br/>";
}
else
{
    echo "Not Connected"."<br/>";
}

mysql_selectdb("carcare");
$sql="insert into suppliermast values('$SupplierCode','$SupplierName','$SupplierAddress',$MobileNo,'$Email')"; 
mysql_query($sql,$con);
mysql_close($con);
echo "data inserted successfully"."<br/>";
}
?>