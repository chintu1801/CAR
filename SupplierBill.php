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
   $sql2 = "select SupplierName from suppliermast where SupplierCode='$sid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  //  $JCustomer_Id = $rs['Customer_ID'];
    $JSuppName = $rs['SupplierName'];
    //$JSuppAdd=$rs['SupplierAddress'];
    
    
 
 echo $JSuppName."<br>";  
    }
    
    
  
}
}

?>

<?php

if(isset($_POST['Submit']))
{
    $SupplierBill=$_POST['SupplierBill'];
    $BillDate=$_POST['BillDate'];
    $SupplierCode=$_POST['SupplierCode'];
    //$SupplierName=$_POST['SupplierName'];
    $Gst=$_POST['Gst'];
    $GstCode=$_POST['GstCode'];
    $FreightCharges=$_POST['FreightCharges'];
    $Done=$_POST['Done'];
    $PaymentMode=$_POST['PaymentMode'];
    $Amount=$_POST['Amount'];
    $TotalAmount=$_POST['TotalAmount'];
echo $SupplierBill, $BillDate,$TotalAmount;    
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
$sql="insert into supplierbill values($SupplierBill,'$BillDate','$SupplierCode','$JSuppName',$Gst,'$GstCode', $FreightCharges, '$Done', '$PaymentMode', $Amount, $TotalAmount)"; 
if(mysql_query($sql,$con))
{
    echo "INSERT SUCCESSFUL"."<br/>";
}
else
{
    echo "NOT INSERTED";
    
}

mysql_close($con);
//echo "data inserted successfully"."<br/>";
}
?>