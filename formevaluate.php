<?php 
	include_once 'includes/dbh.php'
 ?>


<?php 
	if (isset($_POST['form_submit'])){
		$name=$_POST["name"];
		$roll_no=$_POST["roll_no"];
		$dob=$_POST["dob"];
		$address=$_POST["address"];
		$mobile=$_POST["mobile"];
		$mailid=$_POST["mailid"];
		$sem1=$_POST["sem1"];
		$sem2=$_POST["sem2"];
		$sem3=$_POST["sem3"];
		$sem4=$_POST["sem4"];
		$sem5=$_POST["sem5"];
		$sem6=$_POST["sem6"];
		$sem7=$_POST["sem7"];
		$sem8=$_POST["sem8"];
		$cgpa=$_POST["cgpa"];
		$hobbies=$_POST["hobbies"];
		$hord=$_POST["hord"];
		$ref=$_POST["ref"];
		$fp = fopen('data/'.$_POST["roll_no"].'.txt', 'a');
		foreach ($_POST as $key => $value) {
			fwrite($fp,$key."------"."$value"."\n");
		}
		fclose($fp);
		$query = "INSERT into details(name,roll_no,dob,address,mobile,mailid,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,hobbies,hord,ref) values('$name',    '$roll_no','$dob','$address','$mobile','$mailid','$sem1','$sem2','$sem3','$sem4','$sem5' ,'$sem6' ,'$sem7' ,'$sem8' ,'$cgpa' ,'$hobbies' ,'$hord' ,'$ref' )" ;
		$run = mysqli_query($conn,$query);
		if ($run){

			echo '<script>alert("Form submitted successfully")</script>';
			echo "<script> location.href=' https://localhost/dbms/index.php'; </script>";
        	exit;
		}
		else {
			echo '<script>alert("Roll No already exists.")</script>';
			echo "<script> location.href=' https://localhost/dbms/newform.php'; </script>";
        	exit;
		}
	}
	else{
		echo "Enter all details";
	}



 ?>