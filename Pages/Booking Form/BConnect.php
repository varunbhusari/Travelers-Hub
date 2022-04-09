<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php include'BForm.html';?>
	<?php
	  $Nam=$_POST['name'];
	  $Email=$_POST['email'];
	  $Contact=$_POST['contact'];
	  $Number=$_POST['number'];
	  $Pac=$_POST['pack'];
	  
	  $connect=mysqli_connect("localhost","root","");
	  if(!$connect)
	  {
		  die('Could not Connect: '.mysqli_error());
	  }
	  
	  mysqli_select_db($connect,"data");
	  $sql="INSERT INTO booking(Name,Email,Phone,Number,Package)VALUES('$Nam','$Email',$Contact,$Number,'$Pac')";
	  if(!mysqli_query($connect,$sql))
	  {
		  die('Error'.mysqli_error($connect));
	  }
	  echo("Thank You for Chosing Travel Hub! We will contact you as early as possible");
	  mysqli_close($connect);
	?>
</body>
</html>