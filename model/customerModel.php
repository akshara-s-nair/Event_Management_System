<?php
class customerModel{
    private $fname;
    private $lname;
    private $aadhar;
    private $phone;
    private $city;
    private $address;


    function __construct($id)
    {
        $this->fname=$fname;
        $this->lname=$lname;
        $this->aadhar = $aadhar;
        $this->city = $city;
        $this->phone = $phone;
        $this->address = $address;
    }
    function register($fname,$lname,$aadhar,$city,$phone,$address)
    {
        $this->fname=$fname;
        $this->lname=$lname;
        $this->aadhar = $aadhar;
        $this->city = $city;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function addCustomer(dbconnModel $con){
        $stmp = $con->prepare("INSERT INTO customer ( FIRST_NAME, LAST_NAME, AADHAR_NUM, HOUSE_NAME, CITY_NAME, CUST_PHONE) VALUES ( ?, ?, ?, ?, ?, ?)");
        $stmp->bind_param("ssssss",$fname,$lname,$aadhar,$city,$phone,$address);
        if ($stmp->execute()){
            returnId($con);
        }
        else{
            return false;
        }
        $stmp->close();
        $con->db->close();

    }

    public function returnId(dbconnModel $con){
        $s = $con->prepare("SELECT CUST_ID FROM customer WHERE AADHAR_NUM = ?");
        $s->bind_param("s",$aadhar);
        $s->execute();
		$res = $s->get_result();
        $s->close();
        $con->db->close();
    }

}

?>