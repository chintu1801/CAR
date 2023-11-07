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
<body bgcolor="pink">
<center>

<?php
if(isset($_POST['Delete']))
{
        $invno=$_POST['eino'];
        $invdt=$_POST['eidate'];
       
    
    $conn=mysql_connect("localhost","root","");
    if($conn)
    {
        echo "connection successful"."<br/>";
    }
    mysql_select_db("carcare");
    $upd="Delete from invoice where Invoice_no=".$invno."";
    if(mysql_query($upd,$conn))
       
	
     {
        echo "Record Deleted successfully"."<br/>";
     }   
      else
      {
      echo "Record not Deleted"."<br/>"; 
      }
   
      
       mysql_close($conn); 
       
      
    
}

header("Location:inviocedelete.php"); 
?>
</center>
</body>
</html>
