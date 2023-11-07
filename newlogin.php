





<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $uid=$_POST['Utype'];
   echo $uid;
   
   
   
   
   
   
   
   
   
   
   
   $UName=$_POST['UserName'];
   $UPass=$_POST['Password'];
    
   
   if($uid=="User")
   {
     
   
     
   $sql = "select Username,Password from registration where Utype='$uid'";
    $query = mysql_query($sql,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
    $Ruid = $rs['Username'];
    $Rpass= $rs['Password'];        
  
    }
    if(($UName==$Ruid) and($UPass==$Rpass))
    {
        header("Location:"index1.html");
    }
    else
    {
        header("location:"index.html");
     }
        
      echo $uid,$Ruid,$Rpass;
 
}
}

?>
<?php

if(isset($_POST["Submit"]))
{
    $UType=$_POST['Utype'];
    $UName=$_POST['UserName'];
    $UPass=$_POST['Password'];
    
   
  $con=mysql_connect("localhost","root","");
  if($con)
  {
    echo "Connection Successful"."</br>";
  }
  
  mysql_select_db("carcare");
  
  $sql="insert into login values('$UType','$UName','$UPass')";
  if(mysql_query($sql,$con))
  {
    echo "Record inserted Successfully...!!!"."</br>";
  }
  else
  {
    echo "Insert operation fail,,,!!!";
  }
  mysql_close($con);
 
  
    
}


?>