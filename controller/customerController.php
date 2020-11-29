<?php
require("../model/dbconnModel.php"); 
require("../model/customerModel.php");

$conn = new dbconnModel();

$fname = $_GET['username'];
$lname = $_GET['username'];
$aadhar = $_GET['username'];
$phone = $_GET['username'];
$city = $_GET['username'];
$address = $_GET['username'];


$cred = new customerModel($fname,$lname,$aadhar,$city,$phone,$address);
$cred->addCustomer($conn->db);


$conn->db->close();

?>