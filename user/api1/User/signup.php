<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
// set user property values  `uid`,`uname`,`password`,`birth`,`gender`,`address`,`email`,`phone` 
$user->uid = $_POST['uid'];
$user->uname = $_POST['uname'];
$user->password = $_POST['password'];
$user->birth = $_POST['birth'];
$user->gender = $_POST['gender'];
$user->address = $_POST['address'];
$user->email = $_POST['email'];
$user->phone = $_POST['phone'];
// create the user
if($user->signup()){
    echo "<script> window.location.href='../../register.html'; alert('Customer Registered Successfully!!'); </script>";
}
else{
    echo "<script>window.location.href='../../register.html'; alert('Could'nt Register Customer!!'); </script>";
}

?>
