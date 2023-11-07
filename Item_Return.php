
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $iid=$_POST['Return_Code'];
   echo $iid;
   $sql2 = "select Issue_Iname,Issue_Unit_meansure,Issue_Rate,Warranty_Year from item_issue where I_Code='$iid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
  
    $Jiname = $rs['Issue_Iname'];
    $Juom=$rs['Issue_Unit_meansure'];
    $Jrate = $rs['Issue_Rate'];
    $Jwar_gu = $rs['Warranty_Year'];   
    
 
 echo $Jiname,$Juom."<br>";  
    }
    
    
  
}
}

?>



<?php

if(isset($_POST['Submit']))
{
    $IR1=$_POST['Receipt_No'];
    $IR2=$_POST['Return_Code'];
      $IR3=$_POST['Return_Date'];
   
    $IR4=$_POST['Jobcardno'];
    
    $IR5=$_POST['Qty'];
   
    $IR7=$_POST['Value'];
  
    
    //echo $IR9;
    $con=mysql_connect("localhost","root","");
    mysql_select_db("carcare");
    $sql="insert into item_return values($IR1,'$IR2','$Jiname','$IR4','$Juom',$IR5,$Jrate,$IR7,'$Jwar_gu','$IR3')";
   if(mysql_query($sql,$con))
   {
    echo"Data Inserted";
   }
   else
   {
    echo "Record Not inserted";
   }
   
    
    
     $upd="update item_master set Quantity=Quantity + $IR5 ";
    mysql_query($upd,$con);
    echo("Item master updated successfully!!!");
    

 
 mysql_close($con);
}

?>