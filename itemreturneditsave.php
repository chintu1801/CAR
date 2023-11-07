<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Edit']))
{
        $ino=$_POST['rcptcd'];
        $Itemcd=$_POST['retcode'];
        $Desc=$_POST['iname'];
        $jobcardno=$_POST['jobcardno'];
        $UOM=$_POST['uom'];
        $qty=$_POST['qty'];
        $Rate=$_POST['rate'];
        $Value=$_POST['val'];
        $Warranty_Year=$_POST['war'];
        $idate=$_POST['rdate'];
        
      echo $ino,$Rate,$Value,$idate;
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="update item_return set Receipt_Code=$ino,Return_Code='$Itemcd',Return_Name='$Desc',jobcardno='$jobcardno',Unit_Meansure='$UOM',Qty=$qty,Rate=$Rate,Value=$Value,Warranty_Year='$Warranty_Year',Return_Date='$idate' where Receipt_Code=".$ino."";
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

header("Location:itemreturnedit.php"); 
?>
</center>
</body>
</html>
