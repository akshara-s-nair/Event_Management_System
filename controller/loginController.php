<?php
require("../model/dbconnModel.php"); 
require("../model/userModel.php");

$conn = new dbconnModel();

$user = $_GET['username'];
$pass = $_GET['password'];

echo $user.$pass;
$cred = new userModel($user,$pass);
$cred->login($conn->db);
echo $cred->loginCheck();

$conn->db->close();

?>