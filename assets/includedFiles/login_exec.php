<?php
//Start session
session_start();

//Include database connection details
require_once('connect.php');

//Array to store validation errors
$errmsg_arr = array();

//Validation error flag
$errflag = false;

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    global $bd;
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysqli_real_escape_string($bd,$str);
}

//Sanitize the POST values
$username = clean($_POST['username']);
$password = clean($_POST['password']);

//Input Validations
if($username == '') {
    $errmsg_arr[] = 'Username missing';
    $errflag = true;
}
if($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}



//If there are input validations, redirect back to the login form
if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: ../../index.php");
    exit();
}



//Create query
$encrpt_password = md5($password);

$qry="SELECT * FROM admin_details WHERE username='$username' AND password='$encrpt_password'";
$result=mysqli_query($bd, $qry);

//Check whether the query was successful or not
if($result) {
    if(mysqli_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['username'];
        $_SESSION['SESS_LAST_NAME'] = $member['password'];
        session_write_close();
        header("location: home.php");
        exit();
    }else {
        //Login failed
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: ../../index.php");
            exit();
        }
    }
}else {
    die("Query failed");
}
?>