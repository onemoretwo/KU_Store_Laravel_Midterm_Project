<?php

namespace App\Models;

class Point_log extends Model{
    //เชื่อมกับ table `point_log`

    public function point_log_get()
    {
        $data = $this->db->queryAll("select * from point_log" . " where ref_type like 'get' and user_id = 1");
        return $data;
    }

    public function point_log_use(){
        $data = $this->db->queryAll("select * from point_log" . " where ref_type like 'use' and user_id = 1");
        return $data;
    }
}