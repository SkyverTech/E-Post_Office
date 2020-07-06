<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects1/user.php';
 
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
// uid, bookdate, fname, faddress, fphoneno, tname, taddress, tphoneno, pweight, amount
$user->product = $_POST['product'];
$user->amount = $_POST['amount'];
// create the user
if($user->signup()){
    echo "<script> window.location.href='../../sales.html'; alert('Item Added Successfully!!'); </script>";
}
else{
    echo "<script>window.location.href='../../sales.html'; alert('Could'nt ADD!!'); </script>";
}

?>
