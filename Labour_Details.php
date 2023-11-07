<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $lid=$_POST['LC'];
   //echo $sid;
   $sql2 = "select Service_Name,Service_Charge from servicemaster where Service_Code='$lid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
    $JServicename = $rs['Service_Name'];
    $Jcharges = $rs['Service_Charge'];
    //$JSuppAdd=$rs['SupplierAddress'];
    
    
 
 echo $JServicename,$Jcharges."<br>";  
    }
    
    
  
}
}

?>

<?php

if(isset($_POST['Submit']))
{
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysql_select_db("carcare");
    $L_Code=$_POST['LC'];
    $Job_No=$_POST['jobcno'];
    
    $Tax=$_POST['tax'];
    $Gst_amount=$_POST['GA'];
    $Discount=$_POST['discount'];
$Amt=$Jcharges+$Gst_amount-$Discount;
     $sql="insert into labour_detail values('$L_Code','$JServicename','$Job_No',$Jcharges,$Tax,$Gst_amount,$Discount,$Amt)";
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