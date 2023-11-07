<?php

if(isset ($_POST['Submit']))
{
     
    $Complain_Id=$_POST['D1'];
    $Complain_Des=$_POST['D2'];
    $Bay_No=$_POST['D3'];
    
    
    echo $Complain_Id,$Bay_No;
    
$con=mysql_connect("localhost","root","");  
if($con)
{
    echo "Connected to MySQL"."<br/>";
} 
mysql_select_db("carcare");
$sql="update complainmaster set Complain_Des='$Complain_Des',Bay_No=$Bay_No where Complain_Id=$Complain_Id"; 
mysql_query($sql,$con);

mysql_close($con);

echo "Record Updated Successfully";

}

header("location:ComplainMasterEdit.php");
?>