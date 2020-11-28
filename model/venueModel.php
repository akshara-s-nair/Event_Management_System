<?php
class userModel{
    private $venue_name;
    private $venue_city;
    private $max_capacity;
    private $cost;
    private $conn;

    function __construct(dbconnModel $con)
    {
        this->$conn = $con;
    }
    function __destruct()
    {
        $conn->db->close();
    }
    public function getVenues()
    {   
        $stmp = $conn->db->prepare("SELECT * FROM venue");
        $stmp->execute();
		$res = $stmp->get_result();
        $stmp->close();
        if($res->num_rows)
        {
           $this->logged_in = true;
        }
        else
        {
        }
        
    }

}
?>