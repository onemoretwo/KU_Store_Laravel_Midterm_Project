<?php

namespace App\Models;

class Item extends Model{
    public function get_cart_item($cart){
        $allitem = array();
        foreach($cart as $id){
            $data = get_item($id);
            array_push($allitem,$data);
        }
        return $data;
    }

    public function get_item($id){
        $sql = "select * from items where id = :id";
        $data = $this->db->queryAll($sql,[
            'id' => $id
        ]);
        return $data;
    }
}