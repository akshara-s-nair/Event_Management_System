<?php
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
        $this->$fname = $fname;
        $this->$lname = $lname;
        $this->$aadhar = $aadhar;
        $this->$phone = $phone;
        $this->$city = $city;
        $this->$address = $address;
        $this->$date = $date;
        $this->$time = $time;
        $this->$vName = $vName;
        $this->$vCity = $vCity;
        $this->$vMax =$vMax ;
        $this->$vCHP = $vCHP;
        $this->$noPeople = $noPeople;
        $this->$nonVeg = $nonVeg;
        $this->$tNonVeg = $tNonVeg;
        $this->$veg = $veg;
        $this->$tVeg = $tVeg;
        $this->$dType = $dType;
        $this->$flType = $flType;
        $this->$dCost = $dCost;
        $this->$phNo = $phNo ;
        $this->$tNonVeg =$tNonVeg ;
        public $phCost =$phCost ; 
    }
    public function addData(){
        $newCust = new customerdetailsModel();
        $newCust->register($this->fname,$this->lname,$this->aadhar,$this->city,$this->phone,$this->address);
        $cust_id = $newCust->get_cust_id();
        $newBook = new bookingModel($cust_id,$date,$time,$noPeople);
        $newBook->newBooking($conn->db);
    }

}

?>