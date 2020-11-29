<?php
class venueDecModel{
    private $venue_name;
    private $venue_city;
    private $max_capacity;
    private $vcost;
    private $conn;
    private $dectype;
    private $flower;
    private $cost;


    function __construct($con , $dectype, $flower, $vcost ,$venue_name,$venue_city, $max_capacity, $cost)
    {
        $this->conn = $con;
        $this->dectype = $dectype;
        $this->flower= $flower;
        $this->cost = $cost;
        $this->vcost = $vcost;
        $this->venue_name = $venue_name;
        $this->venue_city = $venue_city;
        $this->max_capacity = $max_capacity;
    }
    public function addVenue(){

        $stmp = $conn->db->prepare("INSERT INTO venue (VENUE_NAME, VENUE_ADDRESS,MAX_CAPACITY, COST_PER_HOUR) VALUES (?, ?, ?, ?)");
        $stmp->bind_param("ssss",$this->venue_name,$this->venue_city,$this->max_capacity,$this->vcost);
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if ($stmp->execute()){
            $res = $this->returnId();
            $this->decoration($res);
        }
        else{
            return 'failed';
        }
        $stmp->close();
        
    }

    private function returnId(){
        $s = $con->prepare("SELECT VENUE_ID FROM venue WHERE VENUE_NAME = ?");
        $s->bind_param("s",$this->venue_name);
        $s->execute();
        $res = $s->get_result();
        $s->close();
        $res_array = $res->fetch_assoc();
        return $res_array['CUST_ID'];
        
        
    }

    public function decoration($res){

        $stmp = $conn->db->prepare("INSERT INTO decoration (VENUE_ID, DEC_TYPE, DEC_COST, FLOWER_TYPE) VALUES ( ?, ?, ?, ?)");
        $stmp->bind_param("ssss",$res,$this->dectype,$this->cost,$this->type);
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if ($stmp->execute()){
            
            return 'success';
        }
        else{
            return 'failed';
        }
        $stmp->close();
        
    }

}
?>



INSERT INTO cater (BOOKING_ID, NO_OF_PEOPLE, FOOD_TYPE, TOTAL_FOOD_COST) VALUES (?,?,?,?)