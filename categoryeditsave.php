<html>
<head>
<title>SAVE</title>
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Edit']))
{
        $catcd=$_POST['cat'];
        $catdesc=$_POST['desc'];
        
     
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="update category set category_name='$catdesc' where category_code='".$catcd."'";
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

header("Location:categoryedit.php"); 
?>
</center>
</body>
</html>
