<?php
require("../model/dbconnModel.php"); 
require("../model/userModel.php");

$conn = new dbconnModel();
<<<<<<< HEAD
$user = 'user2';
$pass = 'pass2';

=======

$user = $_GET['username'];
$pass = $_GET['password'];
>>>>>>> 9f6cc3247d3b715da8ee667e86c678f2c26b5f82

echo $user.$pass;
$cred = new userModel($user,$pass);
$cred->login($conn->db);
echo $cred->loginCheck();

$conn->db->close();

?>