<?php
	
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{

		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$userName   = $_POST['userName'];
		$password   = $_POST['password'];
		$confirmPassword   = $_POST['confirmPassword'];
		$gender   = $_POST['gender'];
		$date   = $_POST['date'];
		$month   = $_POST['month'];
		$year   = $_POST['year'];

		if(empty($name) || empty($email) || empty($userName) || empty($password) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year)  ){
			echo "null submission found!";
		}else{
			$_SESSION['name'] 		= $name;
			$_SESSION['email'] 	= $email;
			$_SESSION['userName'] 		= $userName;
			$_SESSION['password'] 		= $password;
			$_SESSION['confirmPassword'] 		= $confirmPassword;
			$_SESSION['gender'] = $gender;
			$_SESSION['day'] 		= $day;
 			$_SESSION['month'] 		= $month;
 			$_SESSION['year'] 		= $year;

			echo "done!";
		}	


	}

else
{
	echo "invalid request";
}


?>