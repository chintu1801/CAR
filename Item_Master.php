<?php

if(isset($_POST['Submit']))
{
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysql_select_db("carcare");
    $I_Code=$_POST['I_Code'];
    $I_Name=$_POST['I_Name'];
    $Abc_Code=$_POST['Abc_Code'];
    $Unit_Mane=$_POST['Unit_Measure'];
    $Quty=$_POST['Quantity'];
    $Rate=$_POST['Rate'];
    $Value=$Quty * $Rate;
    $Gst_Rate=$_POST['Gst_Rate'];
    $Gst_amount=$Value * $Gst_Rate/100;
    $Min_level=$_POST['Mini_level'];
    $Max_level=$_POST['Max_level'];
    $War_gu=$_POST['War_gu'];
    
    echo $I_Code,$I_Name,$Quty,$Rate,$War_gu;
   
    $sql="insert into Item_Master values('$I_Code','$I_Name','$Abc_Code','$Unit_Mane',$Quty,$Rate,$Value,$Gst_Rate,$Gst_amount,$Min_level,$Max_level,'$War_gu')";
    mysql_query($sql,$con);
     if($sql)
     {
        echo "Record Inserted.."."<br/>";
     }
     else
     {
        echo "INSERT FAIL..."."<br/>";
     }
    mysql_close($con);
   
    
}

?>