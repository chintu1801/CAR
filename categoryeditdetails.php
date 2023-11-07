<!DOCTYPE HTML>
<html>
<head>

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

<h1 class="impact" style="color:white;"><b>CATEGORY MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>
 
<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">

<?php
$conn=mysql_connect("localhost","root","");
if($conn)
{
    mysql_select_db("carcare",$conn);
    
    echo "<body bgcolor=''>";
    echo "<center>";
    echo "<h1></h1>";
    $id=$_GET['category_code'];
    $res=mysql_query("select * from category where category_code like '%$id%'");
    $row=mysql_fetch_array($res);
    
    echo "<form action=\"categoryeditsave.php\" method=\"POST\">";
    echo "";
    echo "<tr>";
    echo "<td>Category Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"cat\" value={$row['category_code']}></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Description:&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\"name=\"desc\" value={$row['category_name']}></td>";
    echo "</tr>";
    
     echo "<tr>";
     echo "<td colspan=\"2\" align=\"center\"> <input class=\"button\" type=\"submit\" name=\"Edit\" value=\"Edit\"></td>";
     echo "</tr>";
    
    
    echo "</form>";
    echo "</table>";
    echo "</center>";
   
   
}
mysql_close($conn)
?>

</table>
</center>
</body>
</html>