<?php
require("../model/dbconnModel.php"); 
require("../model/bookingModel.php"); 
require("../model/customerdetailsModel.php");

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

$newCust = new customerdetailsModel();
$newCust->register($fname,$lname,$aadhar,$city,$phone,$address,$conn->db);
echo json_encode($newCust);
$cust_id = $newCust->get_cust_id();
$newBook = new bookingModel($cust_id,$date,$time,$noPeople);
$newBook->newBooking($conn->db);

$conn->db->close();

?>