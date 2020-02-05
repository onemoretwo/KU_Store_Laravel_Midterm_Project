<?php

namespace App\Models;

class Point_log extends Model{
    //เชื่อมกับ table `point_log`

    public function point_log_get($id)
    {
        $sql = "select * from point_log" . " where ref_type like 'get' and user_id = :id";
        $data = $this->db->queryAll($sql,[
            ':id' => $id
        ]);
        return $data;
    }

    public function point_log_use($id){
        $sql = "select * from point_log" . " where ref_type like 'use' and user_id = :id";
        $data = $this->db->queryAll($sql,[
            ':id' => $id
        ]);
        return $data;
    }
}