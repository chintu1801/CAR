<html>
<head>
<title>Category</title>

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



<tr>
<th>Category Code </th>
<th>Description </th>
<th>Action</th>
</tr>






<?php

$con=mysql_connect("localhost","root","");
if($con)

    echo "Connection Successful"."<br/>";


mysql_selectdb("carcare");
$sql="select * from category";
$result=mysql_query($sql,$con);

while($row= mysql_fetch_array($result))
{

    $catcd=$row['category_code'];
    $catdesc=$row['category_name'];
   
?>
<tr>
<td><?php echo $catcd;?></td>
<td><?php echo $catdesc;?></td>

<td><a href="categorydeletedetails.php?category_code=<?php echo $catcd;?>">Delete</a></td>
</tr>




<?php
}
    mysql_close($con);




?>
</center>
</table>
</body>
</html>