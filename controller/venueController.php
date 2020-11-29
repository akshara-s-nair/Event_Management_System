<?php
require("../model/dbconnModel.php"); 
require("../model/venueModel.php");

$conn = new dbconnModel();

        $dectype = $_POST['dectype'];
        $flower= $_POST['flower'];
        $cost = $_POST['cost'];
        $vcost = $_POST['vcost'];
        $venue_name = $_POST['venue_name'];
        $venue_city = $_POST['venue_city'];
        $max_capacity = $_POST['max_capacity'];

$cred = new venueDecModel($conn->db, $dectype, $flower, $vcost ,$venue_name,$venue_city, $max_capacity, $cost);
$cred->venue();
$conn->db->close();

?>