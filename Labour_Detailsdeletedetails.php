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
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor='pink'>";
    echo "<center>";
    echo "<h1>LABOUR DETAILS</h1>";
    $ino=$_GET['labour_code'];
    $res=mysql_query("select * from labour_detail where labour_code like '%$ino%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"Labour_Detailsdeletesave.php\" method=\"POST\">";
    echo "";
    echo "<tr>";
    echo "<td>LC&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"LCode\" value={$row['labour_code']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>LD&nbsp;&nbsp;&nbsp;:&nbsp;<input type=\"text\"name=\"LDesc\" value={$row['labour_desc']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>jobno&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"JobNo\" value={$row['jobcard_no']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Charg&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Charg\" value={$row['Charges']}></td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td>tax&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Tax\" value={$row['Tax']}></td>";
     echo "</tr>";
    echo "<tr>";
    echo "<td>gstam&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"GSTAmount\" value={$row['gst_amount']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>dis&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Discount\" value={$row['Discount']}></td>";
    echo "</tr>";
     echo "<tr>";
    echo "<td>Total Amount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"tamt\" value={$row['Total_Amount']}></td>";
    echo "</tr>";
   
     echo "<tr>";
     echo "<td colspan=\"2\" align=\"center\"><p> <input class=\"button\" type=\"submit\" name=\"Delete\" value=\"Delete\"> </p></td>";
     echo "</tr>";
    
    
    echo "</form>";
    echo "</table>";
    echo "</center>";
   
   
}
mysql_close($conn)
?>