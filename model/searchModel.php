<?php
class searchModel{
    private $key;
    private $table;
    private $con;
    private $result;


    function __construct(dbconnModel $conn){
        $this->$con = $conn;
    }

    public function search(){
        $stmt = $con->db->prepare("SELECT * FROM $this->table WHERE ");
        $
    }
}

?>