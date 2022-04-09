<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php include'Contact.html';?>
	<?php
	  $Name=$_POST['name'];
	  $Email=$_POST['email'];
	  $Message=$_POST['msg'];
	  
	  $connect=mysqli_connect("localhost","root","");
	  if(!$connect)
	  {
		  die('Could not Connect: '.mysqli_error());
	  }
	  
	  mysqli_select_db($connect,"data");
	  $sql="INSERT INTO contact(Name,Email,Message)VALUES('$Name','$Email','$Message')";
	  if(!mysqli_query($connect,$sql))
	  {
		  die('Error'.mysqli_error($connect));
	  }
	  echo("Thank You For Your Valuable Feedback!");
	  mysqli_close($connect);
	?>
</body>
</html>