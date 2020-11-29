<?php
require("../model/dbconnModel.php"); 
require("../model/findallModel.php");

$conn = new dbconnModel();

$fname = $_GET['fname'];
$lanme = $_GET['lname'];

$res = searchUser($fname,$lname,$conn);

$conn->db->close();

?>