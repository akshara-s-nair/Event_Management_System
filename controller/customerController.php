<?php
require("../model/dbconnModel.php"); 
require("../model/customerModel.php");

$conn = new dbconnModel();

$fname = '131';
$lname = '1212';
$aadhar = '121212';
$phone = '121212';
$city = '121212';
$address = '1212121';


$cred = new customerModel($fname,$lname,$aadhar,$city,$phone,$address);
$cred->addCustomer($conn->db);


$conn->db->close();

?>