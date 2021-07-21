<?php
session_start();

$username ="";
$email = "";
$errors = array();

//connect to database


$db = mysqli_connect('localhost', 'root','','water') or die ("could not connect to the database");


//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


//form validation
if(empty($username)) {array_push($errors,"username is required");}
if(empty($email)) {array_push($errors,"email is required");}
if(empty($password_1)) {array_push($errors,"usernaame is required");}
if($password_1 != $password_2){array_push($errors, "passwords do not match");}

//check db for existing user withe sane usertname
$user_check_query = "SELECT * FROM users WHERE 'username' or 'email' LIMIT 1"; 

$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
    if($user['username']=== $username){array_push($errors, 'username already exists');}
    if($user['email']=== $email){array_push($errors, 'email already exists');}
}

if (count($errors) == 0){
    password_hash($password_1, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location : index.php');

}



?>