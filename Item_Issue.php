
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $iid=$_POST['ICode'];
   echo $iid;
   $sql2 = "select I_name,Unit_meansure,Rate,War_gu from item_master where I_code='$iid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  
    $Jiname = $rs['I_name'];
    $Juom=$rs['Unit_meansure'];
    $Jrate = $rs['Rate'];
    $Jwar_gu = $rs['War_gu'];   
    
 
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
   $itemcode=$_POST['ICode'];
   
   
   
   $sql = "select I_code,I_name,Unit_meansure from item_master where I_code='$itemcode'";

    $query = mysql_query($sql,$con);
    while($rs = mysql_fetch_assoc($query))
    {
    $icode = $rs['I_code'];
    $uom = $rs['Unit_meansure'];
    $idesc=$rs['I_name'];
    }
   
    mysql_close($con);
}}
?>


<?php

if(isset($_POST['Submit']))
{
   $IssueNo=$_POST['IssueNo'];
    $ItemCode=$_POST['ICode'];
    $DateI_Code=$_POST['IDate'];
    $Jobcardno=$_POST['Jobcardno'];
    $I_Qty=$_POST['Issue_Qty'];
    $I_Value= $_POST['Issue_Value'];
    
    
    
    echo $IssueNo."<br>";
echo $ItemCode."<br>";
echo $DateI_Code."<br>";
echo $Jobcardno."<br>";

echo $I_Qty."<br>";

echo $I_Value."<br>";


    
    
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carcare");
    $sql="insert into item_issue values($IssueNo,'$ItemCode','$Jiname','$Jobcardno','$Juom',$I_Qty,$Jrate,$I_Value,'$Jwar_gu','$DateI_Code')";
    if(mysql_query($sql,$con))
    {
    echo"Data inserted";    
    }
    else
    {
        echo "Date NOT INSERTED";
    }
    
      $upd="update item_master set Quantity=Quantity - $I_Qty ";
    mysql_query($upd,$con);
    echo("Item master updated successfully!!!");
    
    
    mysql_close($con);
    }


?>