<html>
<head>

<title>COMPLAIN MASTER</title>

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

<h1 class="impact" style="color:white;"><b>COMPLAIN MASTER</b></h1>
<h1 class="impact" style="color:white;"><b>EDIT DETAILS</b></h1>


<table align="center" cellpadding="10" bgcolor="white" style="border:1px solid black" bordercolor="#D7DF01">



<?php

$Complain_Id=$_REQUEST['Complain_Id'];
$con=mysql_connect("localhost","root","");
if($con)
{
    echo "Connected to MySQL"."<br/>";
}
mysql_selectdb("carcare");

$sql="select * from complainmaster where Complain_Id=$Complain_Id";

$result=mysql_query($sql,$con);

while($row=mysql_fetch_array($result))
{
     
   $D1=$row['Complain_Id'];
   $D2=$row['Complain_Des'];
   $D3=$row['Bay_No'];

}

?>

<form method="Post" action="ComplainMasterUpdate.php">

<tr>
<td>Complain Id:</td>
<td><input type="text" name="D1" value="<?php echo $D1;?>"/></td>
</tr>


<tr>
<td>Complain Des:</td>
<td><input type="text" name="D2" value="<?php echo $D2;?>"/></td>
</tr>



<tr>
<td>Bay No:</td>
<td><input type="text" name="D3" value="<?php echo $D3;?>"/></td>
</tr>


<tr>
<td colspan="2" align="center">
<input class="button" type="submit" name="Submit" value="Submit"/>
</td>
</tr>
	
	
	</table>
</form>

<?php
    
    mysql_close($con);
?>
</center>
</body>
</html>