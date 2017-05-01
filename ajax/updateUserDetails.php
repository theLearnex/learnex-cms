<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $zone = $_POST['zone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $work_education = $_POST['work_education'];
    $about_me = $_POST['about_me'];
    $last_login = $_POST['last_login'];
    $corp_id = $_POST['corp_id'];
    
    // Updaste User details
    $query = "UPDATE user SET first_name = '$first_name', last_name = '$last_name',
    email = '$email',
    mobile = '$mobile',
    zone = '$zone',
    state = '$state',
    city = '$city',
    zipcode = '$zipcode',
    work_education = '$work_education',
    about_me = '$about_me',
    last_login = '$last_login',
    corp_id = '$corp_id'
    WHERE user_id = '$user_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}