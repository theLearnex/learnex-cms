<?php
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) 
	&& isset($_POST['password'])
	&& isset($_POST['gender'])
	&& isset($_POST['mobile'])
	&& isset($_POST['zone'])
	&& isset($_POST['state'])
	&& isset($_POST['city'])
	&& isset($_POST['zipcode'])
	&& isset($_POST['work_education'])
	&& isset($_POST['about_me'])
	&& isset($_POST['last_login'])
	&& isset($_POST['corp_id'])
	)
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$password = $_POST['password'];
		$email = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$zone = $_POST['zone'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$zipcode = $_POST['zipcode'];
		$work_education = $_POST['work_education'];
		$about_me = $_POST['about_me'];
		$last_login = $_POST['last_login'];
		$corp_id = $_POST['corp_id'];


		$query = "INSERT INTO users(first_name, last_name, email, password, gender,mobile,zone,state, city, zipcode , work_education,about_me,last_login,corp_id) VALUES('$first_name', '$last_name', '$email', 
		'$gender',
		'$password',
		'$mobile',
		'$zone',
		'$state',
		'$zipcode',
		'$city',
		'$work_education',
		'$about_me',
		'$last_login',
		'$corp_id')";
		echo $query;
		exit;
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>