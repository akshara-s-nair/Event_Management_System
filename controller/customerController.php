<?php
require("../model/dbconnModel.php"); 
require("../model/bookingModel.php"); 
require("../model/customerModel.php");

$conn = new dbconnModel();

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$aadhar = $_GET['aadhar'];
$phone = $_GET['phone'];
$city = $_GET['city'];
$address = $_GET['house'];

$date = $_GET['date'];
$time = $_GET['time'];
$noPeople = $_GET['no'];

$newCust = new customerModel();
$newCust->register($fname,$lname,$aadhar,$city,$phone,$address,$conn->db);
$cust_id = $newCust->get_cust_id();
$newBook = new bookingModel(,$date,$time,$noPeople);
$newBook->newBooking($conn->db);

$conn->db->close();

?>