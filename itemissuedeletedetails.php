<!DOCTYPE HTML>
<html>
<head>
	
	<title>ITEM ISSUE</title>
    
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

<h1 class="impact" style="color:white;"><b>ITEM ISSUE</b></h1>
<h1 class="impact" style="color:white;"><b>DELETE DETAILS</b></h1>

<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">


</head>

<body bgcolor="">


<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor='pink'>";
    echo "<center>";
    echo "<h1></h1>";
    $ino=$_GET['I_No'];
    $res=mysql_query("select * from item_issue where I_No like '%$ino%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"itemissuedeletesave.php\" method=\"POST\">";
    echo "";
    echo "<tr>";
    echo "<td>I_No&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"INo\" value={$row['I_No']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>I_Code&nbsp;&nbsp;&nbsp;:&nbsp;<input type=\"text\"name=\"ICode\" value={$row['I_Code']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Description&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"IName\" value={$row['Issue_Iname']}> </td>";
    echo "</tr>";
     echo "<tr>";
    echo "<td>jobcardno&nbsp&nbsp&nbsp:&nbsp;<input type=\"text\" name=\"jobcardno\" value={$row['jobcardno']}> </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>UOM&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"UOM\" value={$row['Issue_Unit_Meansure']}></td>";
    echo "</tr>"; 
    echo "<tr>";
    echo "<td>Qty&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Qty\" value={$row['Issue_Qty']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Rate&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Rate\" value={$row['Issue_Rate']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Value&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Val\" value={$row['Issue_Value']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Warranty_yr&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"Warrantyyr\" value={$row['Warranty_Year']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Idate rate&nbsp&nbsp&nbsp:&nbsp<input type=\"text\" name=\"IDate\" value={$row['IssueDate']}></td>";
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