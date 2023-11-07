<!DOCTYPE HTML>
<html>
<head>
	
	<title>INVOICE EDIT DETAILS</title>
    
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
    
    <style>
  body {
    background-image: url('bg1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
  }
  </style>
 
</head>

<body bgcolor=""> 
<center>

<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b> INVOICE EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor='pink'>";
    echo "<center>";
    echo "<h1>INVOICE DETAILS</h1>";
    $id=$_GET['Invoice_no'];
    $res=mysql_query("select * from invoice where Invoice_no like '%$id%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"invoiceeditsave.php\" method=\"POST\">";
    echo "<table>";
    echo "<tr>";
    echo "<td><p>Bil No&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"eino\" value={$row['Invoice_no']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Invoice_date&nbsp;&nbsp;&nbsp;:&nbsp;<input type=\"text\"name=\"eidate\" value={$row['Invoice_date']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Jobcard No&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"ejobcardno\" value={$row['Job_cardno']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Customer Name&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"ecutname\" value={$row['Customer_name']}> </p></td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td><p>Address&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"ecutadd\" value={$row['Customer_address']}> </p></td>";
     echo "</tr>";
    echo "<tr>";
    echo "<td><p>Mobile No&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"emono\" value={$row['Mobile_no']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Vehicle  Name&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"evehiclename\" value={$row['Vehicle_name']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>KMS&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"ekms\" value={$row['Kms']}> </p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Vehicle No&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"evehicleno\" value={$row['Vehicle_no']}></p></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><p>Model Name&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"emodelname\" value={$row['Model_name']}></p></td>";
    echo "</tr>";
   echo "<tr>";
    echo "<td><p>Parts Amount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"etotalparts\" value={$row['Total_parts']}></p></td>";
    echo "</tr>";
   echo "<tr>";
    echo "<td><p>Lobour Charges&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"etotallabour\" value={$row['Total_labour']}></p></td>";
    echo "</tr>";
   echo "<tr>";
    echo "<td><p>Tax Amount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"egstamount\" value={$row['Gst_amount']}></p></td>";
    echo "</tr>";
     echo "<tr>";
    echo "<td><p>Discount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"ediscount\" value={$row['Discount']}></p></td>";
    echo "</tr>";
     echo "<tr>";
    echo "<td><p>Net Bill Amount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"enba\" value={$row['Net_bill_amount']}></p></td>";
    echo "</tr>";
    
   
   
     echo "<tr>";
     echo "<td align=\"center\"><p> <input type=\"submit\" name=\"Edit\" value=\"Edit\"> </p></td>";
     echo "</tr>";
    
    
    echo "</form>";
    echo "</table>";
    echo "</center>";
   
   
}
mysql_close($conn)
?>