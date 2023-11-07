<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Delete']))
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
        
     
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="delete from item_return where Receipt_Code=$ino";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record delete successfully"."<br/>";
     }   
      else
      {
      echo "Record not delete"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

//header("Location:itemissuedelete.php"); 
?>
</center>
</body>
</html>
