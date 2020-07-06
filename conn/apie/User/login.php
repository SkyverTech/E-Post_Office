<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->empid = isset($_GET['empid']) ? $_GET['empid'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    header('Location:../../../emp/index.html');
}
else{
    echo "<script>window.location.href='../../../logemp.html'; alert('In-Valid Username OR Password!!'); </script>";
    
}
// make it json format
//print_r(json_encode($user_arr));
?>