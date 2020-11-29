<?php
require("../model/dbconnModel.php"); 
require("../model/userModel.php");

$conn = new dbconnModel();

$user = $_GET['name'];
$pass = $_GET['pass'];

$cred = new userModel($user,$pass);
$cred->login($conn->db);
if($cred->loginCheck())
{
    session_start();
    $_SESSION['cust_id'] = $cred->get_id();
    echo 'true';
}
else {
    echo 'false';
}

$conn->db->close();

?>