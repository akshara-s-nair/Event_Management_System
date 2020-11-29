<?php
class customerModel{
    private $fname;
    private $lname;
    private $aadhar;
    private $phone;
    private $city;
    private $address;
    protected $usr_id;

    function __construct($fname,$lname,$aadhar,$city,$phone,$address)
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

    public function addCustomer($con){
        $stmp = $con->prepare("INSERT into customer( FIRST_NAME, LAST_NAME, AADHAR_NUM, HOUSE_NAME, CITY_NAME, CUST_PHONE) VALUES (?,?,?,?,?,?)");
        echo ($stmp->bind_param("ssssss",$fname,$lname,$aadhar,$address,$city,$phone))?'true':'false';
        $fname = $this->fname;
        $lname = $this->lname;
        $aadhar = $this->aadhar;
        $address = $this->address;
        $city = $this->city;
        $phone = $this->phone;
        
        if ($stmp->execute()){
            $this->returnId($con);
        }
        else{
            return 'false';
        }
        $stmp->close();

    }

    public function returnId($con){
        $s = $con->prepare("SELECT CUST_ID FROM customer WHERE AADHAR_NUM = ?");
        $s->bind_param("s",$this->aadhar);
        $s->execute();
        $res = $s->get_result();
        $res_array = $res->fetch_array(MYSQLI_ASSOC);
        echo "id:".$res_array['CUST_ID'];
                $s->close();
        
    }

}

?>