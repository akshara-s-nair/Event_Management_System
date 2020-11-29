<?php
require("../model/customerdetailsModel.php");
    function getrow($primary,$con){
        $s = $con->prepare("SELECT * FROM customer WHERE CUST_ID = ?");
        $s->bind_param("s",$primary);
        $s->execute();
        $res = $s->get_result();
        $res_array = $res->fetch_assoc();
        return $res_array;
    }

    function searchuser($firstname,$lastname,$con){
        $data_array = array();
        $s = $con->db->prepare("SELECT CUST_ID FROM customer WHERE FIRST_NAME like ? OR LAST_NAME like ?");
        $s->bind_param("ss",$f,$l);
        $f = $firstname.'%';
        $l = $lastname.'%';
        $s->execute();
        $res = $s->get_result();
        while ($row = $res->fetch_assoc()) {
            $custObj = new customerdetailsModel($row["CUST_ID"],$con->db);
            array_push($data_array, json_encode($custObj));
        }
        return $data_array;
    }
?>