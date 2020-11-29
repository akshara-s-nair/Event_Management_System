<?php
require("../model/dbconnModel.php"); 
require("../model/userModel.php");

$conn = new dbconnModel();
$user = 'user2';
$pass = 'pass2';


$cred = new userModel($user,$pass);
$cred->login($conn->db);
echo $cred->logged_in;

?>