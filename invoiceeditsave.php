<html>
<head>
<title>INVOICE</title>
 <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


    <script>
function Form(){
  var J=document.forms["Form1"]["JobCart_No"].value;
  if (J=="")
  {
    alert("Job Card NO must be filled out");
    return false;
    
    }
}
</script>
    
     <--
  <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
  -->
  
</head>
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Edit']))
{
        $invno=$_POST['eino'];
        $invdt=$_POST['eidate'];
        $jobno=$_POST['ejobcardno'];
        $cname=$_POST['ecutname'];
        $cadd=$_POST['ecutadd'];
        $mobi=$_POST['emono'];
        $vname=$_POST['evehiclename'];
        $kms=$_POST['ekms'];
        $vno=$_POST['evehicleno'];
        $modname=$_POST['emodelname'];
        $tpart=$_POST['etotalparts'];
        $tlabour=$_POST['etotallabour'];
         $gst=$_POST['egstamount'];
          $disc=$_POST['ediscount'];
           $netamt=$_POST['enba'];
    
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="update invoice set Invoice_date='$invdt',Job_cardno=$jobno,Customer_name='$cname',Customer_address='$cadd',Mobile_no=$mobi,Vehicle_name='$vname',kms=$kms,Vehicle_no='$vno',Model_name='$modname',Total_parts=$tpart,Total_labour=$tlabour,Gst_amount=$gst,Discount=$disc,Net_bill_amount=$netamt where Invoice_no=".$invno."";
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

header("Location:invioceedit.php"); 
?>
</center>
</body>
</html>
