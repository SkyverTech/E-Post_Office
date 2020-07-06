<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
$user = new User($db);
// uid, bookdate, fname, faddress, fphoneno, tname, taddress, tphoneno, pweight, amount
$user->uid = $_POST['uid'];
$user->bookdate = $_POST['bookdate'];
$user->fname = $_POST['fname'];
$user->faddress = $_POST['faddress'];  
$user->fphoneno = $_POST['fphoneno'];
$user->tname = $_POST['tname'];
$user->taddress = $_POST['taddress'];
$user->tphoneno = $_POST['tphoneno'];
$user->pweight = $_POST['pweight'];
$user->amount = $_POST['amount'];
// create the user
if($user->signup()){
    echo "<script> window.location.href='../../postd/postbook.html'; alert('Post BOOKED Successfully!!'); </script>";
}
else{
    echo "<script>window.location.href='../../postd/postbook.html'; alert('Could'nt Book!!'); </script>";
}

?>
