<?php 
	include_once 'includes/dbh.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata Collector</title>
</head>
<body>


<h2>Enter roll number of the student to get his details.</h2>
<form method = "GET" action="display_form.php"> <input type="text" name="search" placeholder="Search..." style="height: 20px" size="20" maxlength="9" required="required">   <input type="submit" name="searchsubmit" ></form> 
<?php 
	

 ?>
<h3><a href="newform.php">Click Here</a> to  add a new student.</h3>


</body>
</html>