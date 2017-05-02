<?php
include("db_connection.php");
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email_id'])
&& isset($_POST['password'])
&& isset($_POST['gender'])
&& isset($_POST['mobile'])
&& isset($_POST['dob'])
&& isset($_POST['zipcode'])
&& isset($_POST['about_me'])
&& isset($_POST['basic_information'])
&& isset($_POST['work_education'])
&& isset($_POST['slogan'])

)
{
    // include Database connection file
    include("db_connection.php");
    // get values
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email_id = $_POST['email_id'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $zipcode = $_POST['zipcode'];
    $about_me = $_POST['about_me'];
    $basic_information = $_POST['basic_information'];
    $work_education = $_POST['work_education'];
    $slogan = $_POST['slogan'];
    
    
    
    
    $query = "INSERT INTO user(first_name, last_name, email_id, password, gender,mobile,dob,zipcode,about_me,basic_information,work_education,slogan) VALUES('$first_name', '$last_name', '$email_id',
    '$password','$gender','$mobile','$dob','$zipcode','$about_me','$basic_information','$work_education','$slogan')";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    echo "1 Record Added!";
}
?>