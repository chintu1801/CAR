<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Edit']))
{
        $LC=$_POST['LCode'];
        $LD=$_POST['LDesc'];
        $jobno=$_POST['JobNo'];
        $charg=$_POST['Charg'];
        $tax=$_POST['Tax'];
        $GSTAmount=$_POST['GSTAmount'];
        $dis=$_POST['Discount'];
        $tamt=$charg +$GSTAmount - $dis;
        
     
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="update labour_detail set labour_desc='$LD',jobcard_no='$jobno',Charges=$charg,Tax=$tax,gst_amount=$GSTAmount,Discount=$dis, Total_Amount=$tamt where labour_code='$LC'";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record updated successfully"."<br/>";
        header("Location:labour_detailsedit.php"); 
     }   
      else
      {
      echo "Record not updated"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}


?>
</center>
</body>
</html>
