<?php include_once 'includes/dbh.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/form_display.css">
</head>
<body>
<a href="index.php"><button>Go to Home</button>  </a><br>
<div class="container">
	<p>Student Information</p>
<table class="table table-bordered table-striped">
	<tbody>
<?php 
	$search = $_GET['search'];

	$query = "select * from details where roll_no = '$search' " ;

	$data = mysqli_query($conn,$query);
	$record = mysqli_fetch_array($data);
	if ($record)
	{
		for ($i=0; $i <19 ; $i++) { 
			# code...
			unset($record[$i]);
		}
		unset($record['id']);
		foreach ($record as $key => $value) {
			if ($key == 'hord') {
				echo "<tr>"."<th >"."Hoster/Dayscholar"."</th>"."<th>".$value."</th>"."</tr>" ;
			}
			else if ($key == 'ref') {
				echo "<tr>"."<th >"."References"."</th>"."<th>".$value."</th>"."</tr>" ;
			}
			else if($value != 0 and $value){
			echo "<tr>"."<th >".ucfirst($key)."</th>"."<th>".$value."</th>"."</tr>" ;
			}
			else{
			echo "<tr>"."<th >".ucfirst($key)."</th>"."<th>"."-"."</th>"."</tr>" ;
			}
		}
	}
	else{
		echo '<script>alert("Roll No not found.")</script>';
		echo "<script> location.href=' https://localhost/dbms/index.php'; </script>";
    	exit;
	}

?>
</tbody>
</table>
</div>
</body>
</html>