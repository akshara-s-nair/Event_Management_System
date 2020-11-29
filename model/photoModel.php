<?php
class photoModel{
    private $no;
    private $cost;
    function __construct( $no,$date)
    {
        $this->no = $no;
        $this->cost = $cost;
    }
    public function newBooking(dbconnModel $con){
        $stmp = $con->prepare("INSERT INTO photography ( NO_OF_PHOTOGRAPHERS, PHOTO_COST) VALUES (?, ?)");
        $stmp->bind_param("ss",$this->no,$this->cost);
        if ($stmp->execute()){
            return 'true';
        }
        else{
            return 'false';
        }
        $stmp->close();
        
    }
}

?>