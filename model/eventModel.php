<?php
require("../model/customerdetailsModel.php");
require("../model/bookingModel.php");
require("../model/caterModel.php");
require("../model/venueModel.php");
//  I can't .....
function photo($no,$cost,$conn){
    $stmp = $conn->prepare("INSERT INTO photography (NO_OF_PHOTOGRAPHERS, PHOTO_COST) VALUES (?,?)");
    $stmp->bind_param("ii",$no,$cost);
    $stmp->execute();
    $stmp->close();
    
}

class eventModel {
    public $con;
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
    public $phCost;
    public $cust_id;
    public $book_id;
    public $v_id;

    function __construct($fname,$lname,$aadhar,$phone,$city,$address,$date,$time,$vName,$vCity,$vMax,$vCHP,$noPeople,$nonVeg,$tNonVeg,$veg,$tVeg,$dType,$flType,$dCost,$phNo,$phCost,$conn){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->aadhar = $aadhar;
        $this->phone = $phone;
        $this->city = $city;
        $this->address = $address;
        $this->date = $date;
        $this->time = $time;
        $this->vName = $vName;
        $this->vCity = $vCity;
        $this->vMax =$vMax ;
        $this->vCHP = $vCHP;
        $this->noPeople = $noPeople;
        $this->nonVeg = $nonVeg;
        $this->tNonVeg = $tNonVeg;
        $this->veg = $veg;
        $this->tVeg = $tVeg;
        $this->dType = $dType;
        $this->flType = $flType;
        $this->dCost = $dCost;
        $this->phNo = $phNo ;
        $this->phCost =$phCost ; 
        $this->con = $conn;
    }
    
    public function pushData(){
        $newCust = new customerdetailsModel();
        $newCust->construct($this->fname,$this->lname,$this->aadhar,$this->city,$this->phone,$this->address,$this->con);
        $newCust->addCustomer();
        $this->cust_id = $newCust->get_cust_id();
        $newBook = new bookingModel($this->cust_id,$this->date,$this->time,$this->noPeople,$this->con);
        $newBook->newBooking();
        $this->book_id = $newBook->get_book_id();
        $newfood = new caterModel($this->book_id,$this->nonVeg,$this->tNonVeg,$this->veg,$this->tVeg,$this->con);
        $newfood->addFood();
        $newvenue = new venueModel($this->dType,$this->flType,$this->dCost,$this->vName,$this->vCity,$this->vMax,$this->vCHP,$this->con);
        $newvenue->addVenue();
        $this->v_id = $newvenue->get_v_id();
        $newvenue->decoration($this->v_id);
        photo($this->phNo,$this->phCost,$this->con);
       
    }

}

?>