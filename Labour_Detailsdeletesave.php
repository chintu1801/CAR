<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>
<h1>Labour Details</h1>
<?php
if(isset($_POST['Delete']))
{
        $LC=$_POST['LCode'];
        $LD=$_POST['LDesc'];
        $jobno=$_POST['JobNo'];
        $charg=$_POST['Charg'];
        $tax=$_POST['Tax'];
        $GSTAmount=$_POST['GSTAmount'];
        $dis=$_POST['Discount'];
        $tamt=$_POST['tamt'];
        
        echo $LC,$dis;
     
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="delete from labour_detail where labour_code='$LC'";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record Deleted successfully"."<br/>";
        header("Location:labour_detailsdelete.php"); 
     }   
      else
      {
      echo "Record not Deleted"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}


?>
</center>
</body>
</html>
