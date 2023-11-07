<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $jobid=$_POST['jobcard_no'];
   echo $jobid;
   $sql = "select Customer_Id,Customer_Name,Customer_Address,Mobile_No,Model_Name,Vehicle_Name,Vehicle_No,KMS from jobcart where JobCart_No='$jobid'";
    $query = mysql_query($sql,$con);
    while($rs = mysql_fetch_assoc($query))
    {
        
    $JCustomer_Id = $rs['Customer_Id'];
    $JCustomer_Name = $rs['Customer_Name'];
    $JCustomer_Address = $rs['Customer_Address'];
    $JMobile_No=$rs['Mobile_No'];
    $JModel_Name=$rs['Model_Name'];
    $JVehicle_Name=$rs['Vehicle_Name'];
    $JVehicle_No=$rs['Vehicle_No'];
    $Jkms=$rs['KMS'];    
 
 echo $JCustomer_Id,$JMobile_No,$JVehicle_Name,$Jkms."<br>";  
    }
    
    
  
}
}

?>
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $jobid=$_POST['jobcard_no'];
   $sql1 = "select Job_No,GST_Amount,Discount,Amount from partsdetail where Job_No='$jobid'";
    $query1 = mysql_query($sql1,$con);
    $Fpamt=0;
    $Fgamt=0;
    $Fdamt=0;
    while($rs = mysql_fetch_assoc($query1))
    {
        
    $pgst=$rs['GST_Amount'];
    $pdisc=$rs['Discount']; 
    $Pamt = $rs['Amount'];
    
    $Fgamt=$Fgamt+$pgst;
    $Fdamt=$Fdamt+$pdisc;
    $Fpamt=$Fpamt+$Pamt;
      
    }
    
    
   echo $Fpamt;
}
}

?>
<?php

if(isset($_POST['Submit']))
{
    $con=mysql_connect("localhost","root","");
 if($con)
 {
    
  "Connection successful...!!!"."<br/>";
   mysql_select_db("carcare");
   $jobid1=$_POST['jobcard_no'];
   $sql2 = "select jobcard_no,gst_amount,Discount,Total_Amount from labour_detail where jobcard_no='$jobid1'";
    $query2 = mysql_query($sql2,$con);
    $Flamt=0;
    $Flgstamt=0;
    $Fldiscount=0;
    while($rs = mysql_fetch_assoc($query2))
    {
        
    $lgstamt=$rs['gst_amount'];
    $ldiscount=$rs['Discount'];  
    $lamt = $rs['Total_Amount'];
    
    $Flgstamt=$Flgstamt+$lgstamt;
    $Fldiscount=$Fldiscount+$ldiscount;
    $Flamt=$Flamt+$lamt;
      
    }
    
    
   echo $Flamt;
}
}

?>

<?php
if(isset($_POST['Submit']))
{
     $con=mysql_connect("localhost","root","");
     if($con)
     {
        echo "Connection Successful.."."<br/>";
     }
    mysql_select_db("carcare");
    $Inv_Code=$_POST['invoice_no'];
    $Inv_Date=$_POST['invoice_date'];
    $job_cardno=$_POST['jobcard_no'];
    $netbill=0;
    $total_labour=0;
    $total_gstamt=0;
    $total_discount=0;
    $gst_amount=$_POST['gst_amount'];
    $discount=$_POST['discount'];
    
    
    $total_gstamt=$Fgamt+$Flgstamt;
    $total_discount=$Fdamt+$Fldiscount;
    $netbill=($Fpamt+$Flamt+$total_gstamt)-$total_discount;
    
    $nba=$_POST['net_bill_amount'];
    
    $sql3="insert into invoice values($Inv_Code,'$Inv_Date','$job_cardno','$JCustomer_Name','$JCustomer_Address',$JMobile_No,'$JVehicle_Name',$Jkms,'$JVehicle_No','$JModel_Name',$Fpamt,$Flamt,$total_gstamt,$total_discount,$netbill)";
    mysql_query($sql3,$con);
     if($sql3)
     {
        echo "Record Inserted.."."<br/>";
     }
     else
     {
        echo "INSERT FAIL.."."<br/>";
     }

      

    mysql_close($con);
    }
    ?>