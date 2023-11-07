

<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $cid=$_POST['CCode'];
   echo $cid;
   $sql2 = "select category_name from category where category_code='$cid'";
   
    $query = mysql_query($sql2,$con);
    while($rs = mysql_fetch_assoc($query))
    {
         
    $Jcat_name=$rs['category_name'];
    //$Jrate = $rs['Issue_Rate'];
    //$Jwar_gu = $rs['Warranty_Year'];   
    
 
 echo $Jcat_name."<br>";  
    }
    
    
  
}
}

?>



<?php

if(isset($_POST['Submit']))
{
    echo "Hi..";
    $EmpId=$_POST['EmpId'];
    $EmpName=$_POST['EmpName'];
    $EmpCategoryCode=$_POST['CCode'];
    //$EmpCategoryName=$_POST['EmpCategoryName'];
    $EmpAddress=$_POST['EmpAddress'];
    $EmpCity=$_POST['EmpCity'];
    $EmpState=$_POST['EmpState'];
    $EmpPincode=$_POST['EmpPincode'];
    $EmpGender=$_POST['EmpGender'];
    $EmpEmailId=$_POST['EmpEmailId'];
    $EmpLicenseNo=$_POST['EmpLicenseNo'];

    echo $EmpId, $EmpLicenseNo;
$con=mysql_connect("localhost","root","");
    if($con)
{
    echo "Connection Successfil.."."<br/>";
}
else
{
    echo "Not Connected"."<br/>";
}

mysql_selectdb("carcare");
$sql="insert into employee values('$EmpId','$EmpName','$EmpCategoryCode','$Jcat_name','$EmpAddress','$EmpCity','$EmpState',$EmpPincode,'$EmpGender','$EmpEmailId','$EmpLicenseNo')"; 
if(mysql_query($sql,$con))
{
    echo "data inserted successfully"."<br/>";
}
else
{
    echo "data  not inserted "."<br/>";
}
mysql_close($con);

}
?>