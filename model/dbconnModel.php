<?php
require("db_conf.php"); 
class dbconnModel{
    public $db;
    
    function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(mysqli_connect_error())
        {
            die("Cannot connect to database <br />".mysqli_connect_error());
        }
<<<<<<< HEAD

=======
>>>>>>> 9f6cc3247d3b715da8ee667e86c678f2c26b5f82
    }
   

    
}
?>