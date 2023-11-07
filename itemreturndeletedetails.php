<!DOCTYPE HTML>
<html>
<head>

	<title>ITEM RETURN</title>
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

<h1 class="impact" style="color:white;"><b>ITEM RETURN DETAILS</b></h1>


<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor=''>";
    echo "<center>";
    echo "<h1></h1>";
    $ino=$_GET['Receipt_Code'];
    $sql=mysql_query("select * from item_return where Receipt_Code Like '%$ino%'");
    $row=mysql_fetch_array($sql);
    echo "";
    echo "<form action=\"itemreturndeletesave.php\" method=\"POST\">";
    
    echo "<tr>";
    echo "<td>Return Code&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"rcptcd\" value={$row['Receipt_Code']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Return Item Code&nbsp;&nbsp;&nbsp;:&nbsp;<input type=\"text\"name=\"retcode\" value={$row['Return_Code']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Description&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"iname\" value={$row['Return_Name']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Job Card No&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"jobcardno\" value={$row['jobcardno']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>UOM&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"uom\" value={$row['Unit_Meansure']}></td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td>Qty&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"qty\" value={$row['Qty']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Rate&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"rate\" value={$row['Rate']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Value&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"val\" value={$row['Value']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Warranty_yr&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"war\" value={$row['Warranty_Year']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Return Date&nbsp&nbsp&nbsp:&nbsp<input type=\"Date\" name=\"rdate\" value={$row['Return_Date']}></td>";
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

</table>
</form>
</center>
</body>
</html>