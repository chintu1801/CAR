<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Delete']))
{
        $ino=$_POST['INo'];
        $Itemcd=$_POST['ICode'];
        $Desc=$_POST['IName'];
        $jobcardno=$_POST['jobcardno'];
        $UOM=$_POST['UOM'];
        $qty=$_POST['Qty'];
        $Rate=$_POST['Rate'];
        $Value=$_POST['Val'];
        $Warranty_Year=$_POST['Warrantyyr'];
        $idate=$_POST['IDate'];
        
      echo $ino,$Rate,$Value,$idate;
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="delete from item_issue where I_No=$ino";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record deleteed successfully"."<br/>";
     }   
      else
      {
      echo "Record not deleteed"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

header("Location:itemissuedelete.php"); 
?>
</center>
</body>
</html>
