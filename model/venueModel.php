<?php
class venueDecModel{
    private $venue_name;
    private $venue_city;
    private $max_capacity;
    private $cost;
    private $conn;
    private $dectype;
    private $flower;
    private $cost;


    function __construct(dbconnModel $con)
    {
        $this->conn = $con;
    }
    public function venue(){

        $stmp = $conn->db->prepare("INSERT INTO venue (VENUE_NAME, VENUE_ADDRESS,MAX_CAPACITY, COST_PER_HOUR) VALUES (?, ?, ?, ?)");
        $stmp->bind_param("ssss",$this->venue_name,$this->venue_city,$this->max_capacity,$this->cost);
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
        $s = $con->prepare("SELECT VENUE_ID FROM venue WHERE VENUE_NAME = ");
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