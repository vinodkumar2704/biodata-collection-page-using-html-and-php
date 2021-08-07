<?php 
	include_once 'includes/dbh.php'
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata Collector</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/newform.css">
</head>
<body>
<a href="index.php"><button>Go back</button></a>
<div class="container" id="container_form">
<h1 style="text-align:center;">Fill the details given below</h1>
<form method="POST" action="formevaluate.php">

		<div class="row">
		<div class="col">
		<label for="Name">Full Name*  </label> <input id="Name" type="text" name="name" required="required"></div>
		</div>
		<div class="row">
		<div class="col">
	    	<label for="roll">Roll Number* </label> <input id = "roll" type="text" name="roll_no" maxlength="9" required="required"></div>
	    <div class="col">
	    	<label for="dob">Date of Birth* </label><input type="Date" id = "dob" name="dob" required="required"></div>
	    </div>

	    <div class="row"><div class="col">
	    <label for="address">Address* </label><input type="address" id = "address" name="address" required="required"></div></div>
	    <div class="row">
	    <div class="col">
	    <label for="mobile">Mobile Number* </label><input type="tel" id = "mobile" name="mobile" required="required"></div>

	    <div class="col">
	    <label for="email">Email ID* </label><input type="email" id = "email" name="mailid" required="required"></div>
		</div>
	   
	    	<div class="container">
		    	<div class="row">
		    	<legend>Enter SGPA</legend>
		    		<div class="col">
			    <label for="sgpa1">SEM 1*</label><input type="Number" id = "sgpa1" name="sem1" step="0.01" min="0" max="10" required="required">
			    <label for="sgpa3">SEM 3  </label><input type="Number" id = "sgpa3" name="sem3" step="0.01" min = "0" max="10" >
			    <label for="sgpa5">SEM 5  </label><input type="Number" id = "sgpa5" name="sem5" step="0.01" min = "0" max="10">
			    <label for="sgpa7">SEM 7  </label><input type="Number" id = "sgpa7" name="sem7" step="0.01" min = "0" max="10">
					</div>
			    	<div class="col">
			    <label for="sgpa2">SEM 2*</label><input type="Number" id = "sgpa2" name="sem2" step="0.01" min = "0" max="10" required="required">
			    <label for="sgpa4">SEM 4  </label><input type="Number" id = "sgpa4" name="sem4" step="0.01" min = "0" max="10">
			    <label for="sgpa6">SEM 6  </label><input type="Number" id = "sgpa6" name="sem6" step="0.01" min = "0" max="10">
			    <label for="sgpa8">SEM 8  </label><input type="Number" id = "sgpa8" name="sem8" step="0.01" min = "0" max="10">
		    		</div>
		    	</div>
		   		<div class="col-md-6">
	   			<label for="cgpa" style="font-size: 20px">CGPA* </label><br><input  type="Number" id = "cgpa" name="cgpa" step="0.01" required="required">
	   			</div>
	   		</div>
	   <label for="hobbies" style="font-size: 18px;margin-left: 10px">Hobbies </label><br><textarea name="hobbies" rows="5" cols="20" placeholder="Enter each hobby in a new line"></textarea><br>
	   <div class="row" style="padding: 20px;font-size: 20px;">
	   	<div class="col">
	   		<input type="radio" id = "Hostler" name="hord" value="Hostler" required="required">
	    	<label for="Hostler">Hostler</label>
	    	    	
	    	<input type="radio" id = "Dayscholar" name="hord" value="Dayscholar" required="required">
	    	<label for="Dayscholar">Dayscholar</label></div>
	    </div>

	   <label for="references" style="font-size: 18px;margin-left: 10px">References</label><br><textarea name="ref"></textarea>



	    <input type="submit" value="Submit" name="form_submit">



</form>
</div>
</body>
</html>