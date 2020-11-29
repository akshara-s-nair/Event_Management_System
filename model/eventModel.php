<?php
require("../model/userModel.php");
require("../model/bookingModel.php");
class eventModel {
    public $fname;
    public $lname;
    public $aadhar;
    public $phone;
    public $city;
    public $address;
    public $date;
    public $time;
    public $vName;
    public $vCity;
    public $vMax;
    public $vCHP;
    public $noPeople;
    public $nonVeg;
    public $tNonVeg;
    public $veg;
    public $tVeg;
    public $dType;
    public $flType;
    public $dCost;
    public $phNo;
    public $tNonVeg;
    public $phCost; 
    public $con = $conn;

    function __construct($fname,$lname,$aadhar,$phone,$city,$address,$date,$time,$vName,$vCity,$vMax,$vCHP,$noPeople,$nonVeg,$tNonVeg,$veg,$tVeg,$dType,$flType,$dCost,$phNo,$tNonVeg,$phCost){
        $this->$fname = ;
        $this->$lname = ;
        $this->$aadhar = ;
        $this->$phone = ;
        $this->$city = ;
        $this->$address = ;
        $this->$date = ;
        $this->$time = ;
        $this->$vName = ;
        $this->$vCity = ;
        $this->$vMax = ;
        $this->$vCHP = ;
        $this->$noPeople = ;
        $this->$nonVeg = ;
        $this->$tNonVeg = ;
        $this->$veg = ;
        $this->$tVeg = ;
        $this->$dType = ;
        $this->$flType = ;
        $this->$dCost = ;
        $this->$phNo = ;
        $this->$tNonVeg = ;
        public $phCost = ; 
    }
    public function pushData(){
        $newCust = new customerdetailsModel();
        $newCust->register($this->fname,$this->lname,$this->aadhar,$this->city,$this->phone,$this->address);
        $cust_id = $newCust->get_cust_id();
        $newBook = new bookingModel($cust_id,$date,$time,$noPeople);
        $newBook->newBooking($conn->db);
    }

}

?>