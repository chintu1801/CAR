<!DOCTYPE HTML>
 <html>
<head>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

<title>LABOUR DETAILS</title>

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

<h1 class="impact" style="color:white;"><b>LABOUR DETAILS</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor='pink'>";
    echo "<center>";
    echo "<h1></h1>";
    $ino=$_GET['labour_code'];
    $res=mysql_query("select * from labour_detail where labour_code like '%$ino%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"Labour_Detailseditsave.php\" method=\"POST\">";
    echo "";
    echo "<tr>";
    echo "<td><b>Labour Code     :<input type=\"text\"name=\"LCode\" value={$row['labour_code']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Description     :<input type=\"text\"name=\"LDesc\" value={$row['labour_desc']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>JobCard No      :<input type=\"text\" name=\"JobNo\" value={$row['jobcard_no']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Labour Charges  :<input type=\"text\" name=\"Charg\" value={$row['Charges']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Tax Rate        :<input type=\"text\" name=\"Tax\" value={$row['Tax']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Tax Amt.        :<input type=\"text\" name=\"GSTAmount\" value={$row['gst_amount']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Discount        :<input type=\"text\" name=\"Discount\" value={$row['Discount']}></td>";
    echo "</tr>";
    
   echo "<tr>";
    echo "<td><b>Total Amount    :<input type=\"text\" name=\"tamtt\" value={$row['Total_Amount']}></td>";
    echo "</tr>";
    
   
     echo "<tr>";
     
     echo "<td colspan=\"2\" align=\"center\"><pre><b> <input class=\"button\" type=\"submit\" name=\"Edit\" value=\"Edit\"> </pre></td>";
     echo "</tr>";
    
    
    echo "</form>";
    echo "</table>";
    echo "</center>";
   
   
}
mysql_close($conn)
?>
</center>
</body>
</html>