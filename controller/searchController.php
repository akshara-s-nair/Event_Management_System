<?php
require("../model/dbconnModel.php"); 
require("../model/findallModel.php");

$conn = new dbconnModel();

$reqRaw = $_GET['data'];
$reqObj = json_decode($reqRaw);


$fname = $reqObj->fname;
$lname = $reqObj->lname;

$res = searchUser($fname,$lname,$conn);

echo $res;

$conn->db->close();

?>