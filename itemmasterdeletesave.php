<html>
<head>
<title>SAVE</title>
</head>
<body>
<center>

<?php
if(isset($_POST['Delete']))
{
        $ino=$_POST['icode'];
        $Itemcd=$_POST['Iname'];
        $Desc=$_POST['abc'];
        $UOM=$_POST['uom'];
        $qty=$_POST['qty'];
        $Rate=$_POST['rate'];
        $Val=$_POST['val'];
        $Grate=$_POST['grate'];
        $Gamt=$_POST['gamt'];
        $Minlevel=$_POST['minlevel'];
        $Maxlevel=$_POST['maxlevel'];
        $Warranty_Year=$_POST['war'];
        
        
      
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
        mysql_select_db("carcare");
        
        echo "<body bgcolor='pink'>";
        echo "<center>";
    $upd="delete from item_master where I_code='$ino'";
    if(mysql_query($upd,$conn))
        
	
     {
        echo "Record deleted successfully"."<br/>";
     }   
      else
      {
      echo "Record not Deleted"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

header("Location:itemmasterdelete.php"); 
?>
</center>
</body>
</html>
