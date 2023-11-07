<html>
<head>
<title>SAVE</title>
</head>
<body>
<center>

<?php
if(isset($_POST['Edit']))
{
        
        $Itemcd=$_POST['icode'];
        $Desc=$_POST['Iname'];
        $Abc=$_POST['abc']; 
        $UOM=$_POST['uom'];
        $qty=$_POST['qty'];
        $Rate=$_POST['rate'];
        $Val=$_POST['val'];
        $gtsrate=$_POST['grate'];
        $gstamt=$_POST['gamt'];
        
        $Minlevel=$_POST['minlevel'];
        $Maxlevel=$_POST['maxlevel'];
        $Warranty_Year=$_POST['war'];
       // $idate=$_POST['Issue_Date'];
        
      
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
        mysql_select_db("carcare");
        
        echo "<body bgcolor='pink'>";
        echo "<center>";
    $upd="update item_master set I_name='$Desc',abc_code='$Abc',Unit_meansure='$UOM',Quantity=$qty,Rate=$Rate,Value=$Val,Gts_rate=$gtsrate,Gst_amount=$gstamt,Mini_level=$Minlevel,Max_level=$Maxlevel,War_gu='$Warranty_Year' where I_code='$Itemcd'";
    if(mysql_query($upd,$conn))
        
	
     {
        echo "Record updated successfully"."<br/>";
     }   
      else
      {
      echo "Record not updated"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

header("Location:itemmasteredit.php"); 
?>
</center>
</body>
</html>
