<?php

require('./model/userModel.php');
require("./model/dbconnModel.php"); 

$conn = new dbconnModel();

$user = $_POST['username'];
$pass = $_POST['password'];


$cred = new userModel($user,$pass);
$cred->login($conn->db);
echo $cred->logged_in;

?>