<?php

if(isset($_POST['Submit']))
{
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysql_select_db("carcare");
    $cat_code=$_POST['category_code'];
    $cat_name=$_POST['category_name'];
    
     $sql="insert into category values('$cat_code','$cat_name')";
    mysql_query($sql,$con);
     if($sql)
     {
        echo "Record Inserted.."."<br/>";
     }
     else
     {
        echo "INSERT FAIL..."."<br/>";
     }
    mysql_close($con);
   
    
}

?>