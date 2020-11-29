<?php
    function getrow($primary){
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
        $s->bind_param("ss",$firstname.'%',$lastname.'%');
        $s->execute();
        $res = $s->get_result();
        while ($row = mysql_fetch_assoc($res)) {
            $custObj = new customerModel($row["CUST_ID"]);
            array_push($data_array, json_encode($custObj));
        }
        return $data_array;
    }
?>