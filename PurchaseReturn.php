
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $iid=$_POST['ItemCode'];
   echo $iid;
   $sql2 = "select I_name,Unit_meansure from item_master where I_code='$iid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  //  $JCustomer_Id = $rs['Customer_ID'];
    $Jiname = $rs['I_name'];
    $Juom=$rs['Unit_meansure'];
    
    
 
 echo $Jiname,$Juom."<br>";  
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
    $PurchaseReturnNo=$_POST['PurchaseReturnNo'];
    $PurchaseReturnDate=$_POST['PurchaseReturnDate'];
    $SupplierCode=$_POST['SupplierCode'];
    //$SupplierName=$_POST['SupplierName'];
    //$SupplierAddress=$_POST['SupplierAddress'];
    $GstRate=$_POST['GstRate'];
    $GstAmount=$_POST['GstAmount'];
    $TinCode=$_POST['TinCode'];
    $ItemCode=$_POST['ItemCode'];
    
    $Quantity=$_POST['Quantity'];
    
    
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
$sql="insert into Purchasereturn values($PurchaseReturnNo,'$PurchaseReturnDate','$SupplierCode','$JSuppName','$JSuppAdd',$GstRate,$GstAmount,'$TinCode','$ItemCode','$Jiname','$Juom',$Quantity)"; 
mysql_query($sql,$con);

echo "data inserted successfully"."<br/>";
}
$upd="update purchaseorder set Qty=Qty - $Quantity ";
if(mysql_query($upd,$con))
{
    echo "PO Updated";
}
else
{
    echo "PO NOT UPDATED...";
}

mysql_close($con);
//header("location:Purchasereturneditrecord.php")
?>