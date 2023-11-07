<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Delete']))
{
        $catcd=$_POST['cat'];
        $catdesc=$_POST['desc'];
        
     
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="delete from category where category_code='".$catcd."'";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record Deleted successfully"."<br/>";
     }   
      else
      {
      echo "Record not Deleted"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

header("Location:categorydelete.php"); 
?>
</center>
</body>
</html>
