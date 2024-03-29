<?php
class bookingModel{
    private $cust_id;
    private $date;
    private $time;
    private $no_of_people;
    private $booking_id;
    public $con;
    function __construct( $cust_id,$date,$time,$no_of_people,$conn)
    {
        $this->cust_id=$cust_id;
        $this->date = $date;
        $this->time = $time;
        $this->no_of_people= $no_of_people;
        $this->con = $conn;

    }
    public function newBooking(){
        $stmp = $this->con->prepare("INSERT INTO booking (CUST_ID, DATE_EVENT, START_TIME, NO_OF_PEOPLE) VALUES (?, ?, ?, ?)");
        $stmp->bind_param("issi",$this->cust_id,$this->date,$this->time,$this->no_of_people);
        if ($stmp->execute()){
            $this->booking_id = $this->returnId();
        }
        else{
            return false;
        }
        $stmp->close();
        
    }

    private function returnId(){
        $s = $this->con->prepare("SELECT BOOKING_ID FROM booking WHERE CUST_ID = ?");
        $s->bind_param("s",$this->cust_id);
        $s->execute();
		$res = $s->get_result();
        $s->close();
        $res_array = $res->fetch_assoc();
        return $res_array['BOOKING_ID'];
        
    }
    function get_book_id()
    {
        return $this->booking_id;
    }

}

?>