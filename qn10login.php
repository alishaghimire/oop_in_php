<?php
$userid = $_POST['userid'];
$password = $_POST['password'];

// Sample valid login
$valid_user = "admin";
$valid_pass = "12345";

if($userid === $valid_user && $password === $valid_pass){
    echo "success";
} else {
    echo "error";
}
?>