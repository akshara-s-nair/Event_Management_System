<?php
require("../model/dbconnModel.php"); 
require("../model/findallModel.php");

$conn = new dbconnModel();

$reqRaw = $_GET['data'];
$reqObj = json_encode();

$res = searchUser($reqObj->fname,$reqObj->lname,$conn);

echo $res;

$conn->db->close();

?>