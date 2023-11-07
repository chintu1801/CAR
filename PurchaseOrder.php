
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $sid=$_POST['SupplierCode'];
   //echo $sid;
   $sql2 = "select SupplierName,SupplierAddress from suppliermast where SupplierCode='$sid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  //  $JCustomer_Id = $rs['Customer_ID'];
    $JSuppName = $rs['SupplierName'];
    $JSuppAdd=$rs['SupplierAddress'];
    
    
 
 echo $JSuppName,$JSuppAdd."<br>";  
    }
    
    
  
}
}

?>


<?php

if(isset($_POST['Submit']))
{
    
$con1=mysql_connect("localhost","root","");
    if($con1)
{
    echo "Connection Successfull.."."<br/>";
}
else
{
    echo "Not Connected"."<br/>";
}

mysql_selectdb("carcare");
$PONo=$_POST['PurchaseNo'];
    $PODt=$_POST['Pdate'];
    $SuppCode=$_POST['SupplierCode'];
    $GST=$_POST['Gst'];
    $Tin=$_POST['TIN'];
    $Aadhar=$_POST['ANo'];
    $ItemCode=$_POST['ItemCode'];
    $Qty=$_POST['Quantity'];
    $Amount=$_POST['TotalAmount'];
    
    echo $PONo, $GST, $Amount;
   // echo "<br/>";
    //echo $PODt,$ItemCode, $Qty;

$sql3="Insert into purchaseorder values($PONo,'$PODt','$SuppCode','$JSuppName','$JSuppAdd',$GST,'$Tin',$Aadhar,'$ItemCode',$Qty,$Amount)";
if(mysql_query($sql3,$con1))
{
    echo "INSERT SUCCESSFUL"."<br/>";
}
else
{
    echo "NOT INSERTED";
    
}



//echo "data inserted successfully"."<br/>";
mysql_close($con);
}
?>