<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
// set user property values  `uid`,`uname`,`password`,`birth`,`gender`,`address`,`email`,`phone`
$user->empid = $_POST['empid'];
$user->empname = $_POST['empname'];
$user->password = $_POST['password'];
$user->birth = $_POST['birth'];
$user->gender = $_POST['gender'];
$user->address = $_POST['address'];
$user->email = $_POST['email'];
$user->phone = $_POST['phone'];
$user->qualification = $_POST['qualification'];
$user->designation = $_POST['designation'];
$user->salary = $_POST['salary'];
$user->basic_pay = $_POST['basic_pay'];

// create the user
if($user->signup()){
    echo "<script> window.location.href='../../empreg.html'; alert('Employee Registered Successfully!!'); </script>";
}
else{
    echo "<script>window.location.href='../../empreg.html'; alert('Could'nt Register Employee!!'); </script>";
}

?>
