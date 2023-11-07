<!DOCTYPE HTML>
<html>
<head>
<title>ITEM MASTER</title>

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
  
<body bgcolor=""> 
<center>
<marquee><h1 class="impact" style="color:white;"><b><i>CAR CARE SERVICE CENTER</i></b></h1></marquee>

<h1 class="impact" style="color:white;"><b>ITEM MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor='pink'>";
    echo "<center>";
    echo "<h1>ITEM MASTER DETAILS</h1>";
    $cd=$_GET['I_code'];
    $res=mysql_query("select * from item_master where I_code like '%$cd%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"itemmasterdeletesave.php\" method=\"POST\">";
    echo "";
    echo "<tr>";
    echo "<td>Item code&nbsp;&nbsp;&nbsp;:&nbsp;<input type=\"text\"name=\"icode\" value={$row['I_code']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Description&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"Iname\" value={$row['I_name']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>ABC Code&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"abc\" value={$row['abc_code']}> </td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td>Uom&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"uom\" value={$row['Unit_meansure']}> </td>";
     echo "</tr>";
    echo "<tr>";
    echo "<td>Qty&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"qty\" value={$row['Quantity']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Rate&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"rate\" value={$row['Rate']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Value&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"val\" value={$row['Value']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>gst rate&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"grate\" value={$row['Gts_rate']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gst Amount&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"gamt\" value={$row['Gst_amount']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Min Level&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"minlevel\" value={$row['Mini_level']}></td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>Max Level&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"maxlevel\" value={$row['Max_level']}></td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>Warranty&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"war\" value={$row['War_gu']}></td>";
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

<center/>
    </table>
    </form>
</body>
</html>