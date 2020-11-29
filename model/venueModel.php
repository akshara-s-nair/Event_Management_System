<?php
class venueModel{
    private $venue_id;
    private $venue_name;
    private $venue_city;
    private $max_capacity;
    private $vcost;
    private $conn;
    private $dectype;
    private $flower;
    private $cost;
    public  $con;

    function __construct($dectype, $flower, $dcost ,$venue_name,$venue_city, $max_capacity, $vcost,$conn)
    {
        $this->con = $conn;
        $this->dectype = $dectype;
        $this->flower= $flower;
        $this->cost = $dcost;
        $this->vcost = $vcost;
        $this->venue_name = $venue_name;
        $this->venue_city = $venue_city;
        $this->max_capacity = $max_capacity;
    }
    public function addVenue(){

        $stmp = $this->con->prepare("INSERT INTO venue (VENUE_NAME, VENUE_ADDRESS,MAX_CAPACITY, COST_PER_HOUR) VALUES (?, ?, ?, ?)");
        $stmp->bind_param("ssii",$this->venue_name,$this->venue_city,$this->max_capacity,$this->vcost);
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if (true){
            $this->venue_id = $this->returnId();
        }
        else{
            return 'failed';
        }
        
    }

    private function returnId(){
        $s = $this->con->prepare("SELECT VENUE_ID FROM venue WHERE VENUE_NAME = ?");
        $s->bind_param("s",$this->venue_name);
        $s->execute();
        $res = $s->get_result();
        $s->close();
        $res_array = $res->fetch_assoc();
        return $res_array['VENUE_ID'];
        
        
    }
    public function get_v_id()
    {
        return $this->venue_id;
    }
    public function decoration($v_id){

        $stmp = $this->con->prepare("INSERT INTO decoration (VENUE_ID, DEC_TYPE, DEC_COST, FLOWER_TYPE) VALUES ( ?, ?, ?, ?)");
        $stmp->bind_param("isis",$v_id,$this->dectype,$this->cost,$this->flower);
        $stmp->execute();
        $stmp->close();
        
    }

}
?>



