<?php
class caterModel{
    private $cater_id;
    private $book_id;
    private $no_of_people;
    private $type;
    private $cost;
    private $nonVeg;
    private $veg;
    private $vCost;
    private $nvCost;
    public $con;

    function __construct($b_id, $non,$nvcost, $von,$vcost,$conn)
    {
        $this->book_id= $b_id;
        $this->nonVeg = $non;
        $this->veg = $von;
        $this->vCost = $vcost;
        $this->nvCost = $nvcost;
        $this->con = $conn;
    }
    public function addFood(){

        $stmp = $this->con->prepare("INSERT INTO cater (BOOKING_ID, NO_OF_PEOPLE, FOOD_TYPE, COST_PER_ITEM, TOTAL_FOOD_COST) VALUES (?,?,'VEG',?,?)");
        $stmp2 = $this->con->prepare("INSERT INTO cater (BOOKING_ID, NO_OF_PEOPLE, FOOD_TYPE, COST_PER_ITEM, TOTAL_FOOD_COST) VALUES (?,?,'NON_VEG',?,?)");
        $stmp->bind_param("siii",$this->book_id,$this->veg,$this->vCost,$tCost1);
        $stmp2->bind_param("siii",$this->book_id,$this->nonVeg,$this->nvCost,$tCost2);
        $tCost1 = $this->veg + $this->vCost;
        $tCost2 = $this->nonVeg + $this->nvCost;
        $stmp->execute();
        $stmp2->execute();
        $stmp->close();
        $stmp2->close();
        
    }




}
?>


