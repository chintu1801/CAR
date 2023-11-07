<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Edit']))
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
    $upd="update item_issue set I_No=$ino,Issue_Iname='$Desc',jobcardno='$jobcardno',Issue_Unit_meansure='$UOM',Issue_Qty=$qty,Issue_Rate=$Rate,Issue_Value=$Value,Warranty_Year='$Warranty_Year',IssueDate='$idate' where I_Code='".$Itemcd."'";
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

header("Location:itemissueedit.php"); 
?>
</center>
</body>
</html>
