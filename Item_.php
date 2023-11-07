<?php

if(isset($_POST['submit']))
{
    $I_Code=$_POST['I_Code'];
    $I_Name=$_POST['I_Name'];
    $Abc_Code=$_POST['Abc_Code'];
    $Unit_Mane=$_POST['Unit_Meansure'];
    $Quty=$_POST['Quantity'];
    $Rate=$_POST['Rate'];
    $Value=$_POST['Value'];
    $Gst_Rate=$_POST['Gst_Rate'];
    $Gst_amount=$_POST['Gst_Amount'];
    $Mini_level=$_POST['Mini_level'];
    $Max_level=$_POST['Max_level'];
    $War_gu=$_POST['War_gu'];
    
    
    $con=mysql_connect("localhost","root"."");
    mysql_select_db("carcare");
    $sql="insert into Item_Master values('$I_Code','$I_Name','$Abc_Code','$Unit_Mane',$Quty,$Rate,$Value,$Gst_Rate,$Gst_amount,$Mini_level,$Max_level,'$War_gu')";
    
}

?>