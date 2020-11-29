<?php
class bookingModel{
    private $cust_id;
    private $date;
    private $time;
    private $no_of_people;

    function __construct( $booking_id,$cust_id,$date,$time,$no_of_people)
    {
        $this->booking_id=$booking_id;
        $this->cust_id=$cust_id;
        $this->date = $date;
        $this->time = $time;
        $this->no_of_people= $no_of_people;

    }

    public function newBooking(dbconnModel $con){
        $stmp = $con->prepare("INSERT INTO booking (CUST_ID, DATE_EVENT, START_TIME, NO_OF_PEOPLE) VALUES (?, ?, ?, ?, ?)");
        $stmp->bind_param("ssss",$cust_id,$date,$time,$no_of_people);
        if ($stmp->execute()){
            returnId($con);
        }
        else{
            return false;
        }
        $stmp->close();
        
    }

    public function returnId(dbconnModel $con){
        $s = $con->prepare("SELECT BOOKING_ID FROM booking WHERE CUST_iD = ?");
        $s->bind_param("s",$this->cust_id);
        $s->execute();
		$res = $s->get_result();
        $s->close();
        
    }

}

?>