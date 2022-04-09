<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php include'Form.html';?>
	<?php
	  $Name=$_POST['name'];
	  $Email=$_POST['email'];
	  $State=$_POST['state'];
	  $City=$_POST['city'];
	  $Exp=$_POST['exp'];
	  $Suggest=$_POST['suggest'];
	  
	  $connect=mysqli_connect("localhost","root","");
	  if(!$connect)
	  {
		  die('Could not Connect: '.mysqli_error());
	  }
	  
	  mysqli_select_db($connect,"data");
	  $sql="INSERT INTO feedback(Name,Email,State,City,Experience,Suggestion)VALUES('$Name','$Email','$State','$City','$Exp','$Suggest')";
	  if(!mysqli_query($connect,$sql))
	  {
		  die('Error'.mysqli_error($connect));
	  }
	  echo("Thank You For Your Valuable Feedback!");
	  mysqli_close($connect);
	?>
</body>
</html>