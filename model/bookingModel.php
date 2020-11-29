<?php
class bookingModel{
    private $cust_id;
    private $date;
    private $time;

    function __construct( $booking_id,$cust_id,$date,$time)
    {
        $this->booking_id=$booking_id;
        $this->cust_id=$cust_id;
        $this->date = $date;
        $this->time = $time;

    }

    public function newBooking(dbconnModel $con){
        $stmp = $con->prepare("INSERT INTO booking (CUST_ID, DATE_EVENT, START_TIME) VALUES (?, ?, ?)");
        $stmp->bind_param("ssss",$this->cust_id,$this->date,$this->time);
        if ($stmp->execute()){
            returnId($con);
        }
        else{
            return false;
        }
        $stmp->close();
        
    }

    public function returnId(dbconnModel $con){
        $s = $con->prepare("SELECT BOOKING_ID FROM booking WHERE CUST_ID = ?");
        $s->bind_param("s",$this->cust_id);
        $s->execute();
		$res = $s->get_result();
        $s->close();
        
    }

}

?>