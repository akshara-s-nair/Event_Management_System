<?php
require("../model/dbconnModel.php"); 
require("../model/eventModel.php");
$conn = new dbconnModel();
$reqRaw = $_GET['data'];
$reqObj = json_decode($reqRaw);

$fname = $reqObj->fname;
$lname = $reqObj->lname;
$aadhar = $reqObj->aadhaar;
$phone = $reqObj->mob;
$city = $reqObj->address;
$address = $reqObj->city;
$date = $reqObj->dt;
$time = $reqObj->tm;
$vName = $reqObj->vName;
$vCity = $reqObj->vCity;
$vMax = $reqObj->vMax;
$vCHP = $reqObj->vCHP;
$noPeople = $reqObj->tNo;
$nonVeg = $reqObj->nonVeg;
$tNonVeg = $reqObj->tNonVeg;
$veg = $reqObj->veg;
$tVeg = $reqObj->tVeg;
$dType = $reqObj->dType;
$flType = $reqObj->flType;
$dCost = $reqObj->dCost;
$phNo = $reqObj->phNo;
$tNonVeg = $reqObj->tNonVeg;
$phCost = $reqObj->phCost;

$newEvent = new eventModel($fname,$lname,$aadhar,$phone,$city,$address,$date,$time,$vName,$vCity,$vMax,$vCHP,$noPeople,$nonVeg,$tNonVeg,$veg,$tVeg,$dType,$flType,$dCost,$phNo,$tNonVeg,$phCost,$conn);
$newEvent->pushData();
echo "{data:'true'}";
$conn->db->close();

?>