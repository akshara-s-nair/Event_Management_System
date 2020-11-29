<?php
class caterModel{
    private $cater;
    private $b_id;
    private $no_of_people;
    private $type;
    private $cost;
    private $non;
    private $von;
    private $vcost;
    private $nvcost;


    function __construct($con , $cater, $b_id, $no_of_people ,$type,$cost, $non, $von,$vcost,$nvcost)
    {
        $this->conn = $con;
        $this->cater = $cater;
        $this->b_id= $b_id;
        $this->no_of_people = $no_of_people;
        $this->type = $type;
        $this->cost = $cost;
        $this->non = $non;
        $this->von = $von;
        $this->vcost = $vcost;
        $this->nvcost = $nvcost;
    }
    public function addFood(){

        $stmp = $conn->db->prepare("INSERT INTO cater (BOOKING_ID, NO_OF_PEOPLE, FOOD_TYPE, TOTAL_FOOD_COST) VALUES (?,?,?,?)");
        $stmp->bind_param("sssi",$this->b_id,$this->no_of_people,$this->type,$this->cost);
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if ($stmp->execute()){
            $res = $this->returnId();
            $this->extraFittings($res);
        }
        else{
            return 'failed';
        }
        $stmp->close();
        
    }

    private function returnId(){
        $s = $con->prepare("SELECT CATER_ID FROM cater WHERE BOOKING_ID = ?");
        $s->bind_param("s",$this->b_id);
        $s->execute();
        $res = $s->get_result();
        $s->close();
        $res_array = $res->fetch_assoc();
        return $res_array['CATER_ID'];
        
        
    }

    public function extraFittings($res){

        $veg = $conn->db->prepare("INSERT INTO veg (CATER_ID, NO_OF_VEG, COST_PER_PLATE) VALUES ( ?, ?, ?)");
        $veg->bind_param("ssi",$res,$this->von,$this->vcost);
        $veg->execute();
		$res = $veg->get_result();
        $veg->close();

        $nonveg = $conn->db->prepare("INSERT INTO non_veg (CATER_ID, NO_OF_NON, COST_PER_PLATE) VALUES ( ?, ?, ?)");
        $nonveg->bind_param("ssi",$res,$this->non,$this->nvcost);
        $nonveg->execute();
		$res = $nonveg->get_result();
        $nonveg->close();

        if ($veg->execute() && $nonveg->execute()){
            
            return 'success';
        }
        else{
            return 'failed';
        }
        $stmp->close();
        
    }

}
?>


