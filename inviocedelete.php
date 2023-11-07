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
<body bgcolor="#D7DF01">
<center>
<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>
<h1 class="impact" style="color:white;"><b>INVOICE </b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS </b></h1>
 <table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">
<tr>
<th>Bill No </th>
<th>Invoice Date</th>
<th>Jobcard No</th>
<th>Customer Name </th>
<th>Address</th>
<th>Mobile No</th>
<th>Vehicle  Name</th>
<th>KMS</th>
<th>Vehicle No</th>
<th>Model Name</th>
<th>Parts Amount</th>
<th>Lobour Charges</th>
<th>Tax Amount</th>
<th>Discount</th>
<th>Net Bill Amount</th>
<th>Action</th>
</tr>

<?php

$con=mysql_connect("localhost","root","");
if($con)

    echo "Connection Successful"."<br/>";


mysql_selectdb("carcare");
$sql="select * from invoice";
$result=mysql_query($sql,$con);

while($row= mysql_fetch_array($result))
{

    $eino=$row['Invoice_no'];
    $eidate=$row['Invoice_date'];
    $ejobcardno=$row['Job_cardno'];
    $ecutname=$row['Customer_name'];
    $ecutadd=$row['Customer_address'];    
    $emono=$row['Mobile_no'];
    $evehiclename=$row['Vehicle_name'];
    $ekms=$row['Kms'];
    $evehicleno=$row['Vehicle_no'];
    $emodelname=$row['Model_name'];
    $etotalparts=$row['Total_parts'];
     $etotallabour=$row['Total_labour'];
      $egstamount=$row['Gst_amount'];
       $ediscount=$row['Discount'];
        $enba=$row['Net_bill_amount'];
?>
<tr>
<td><?php echo $eino;?></td>
<td><?php echo $eidate;?></td>
<td><?php echo $ejobcardno;?></td>
<td><?php echo  $ecutname;?></td>
<td><?php echo  $ecutadd;?></td>
<td><?php echo   $emono;?></td>
<td><?php echo $evehiclename;?></td>
<td><?php echo $ekms;?></td>
<td><?php echo $evehicleno;?></td>
<td><?php echo $emodelname;?></td>
<td><?php echo $etotalparts;?></td>
<td><?php echo $etotallabour;?></td>
<td><?php echo $egstamount;?></td>
<td><?php echo $ediscount;?></td>
<td><?php echo $enba;?></td>
<td><a href="invoicedeletedetails.php?Invoice_no=<?php echo $eino;?>">Delete</a></td>
</tr>




<?php
}
    mysql_close($con);

?>
</center>
</body>
</html>