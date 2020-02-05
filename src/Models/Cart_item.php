<?php

namespace App\Models; 
use App\Framework\Utilities\Session; 

class Cart_item extends Model{
    public function add($user_id,$item_id){
        $sql = "INSERT INTO cart_items (`user_id`, `item_id`)"
                . " VALUES (:user_id, :item_id)";
        $data = $this->db->queryAll($sql,[
            ':user_id' => $user_id,
            ':item_id' => $item_id
        ]);
        return $data;
    }

    public function get_mycart($id){
        $sql = "select cart_items.id, `name`, price, image_path from cart_items join items on cart_items.item_id = items.id where user_id = :id";
        $data = $this->db->queryAll($sql,[
            ':id' => $id
        ]);
        return $data;
    }

    public function del_mycart($itemid){
        $sql = "delete from cart_items where id = :id";
        $data = $this->db->queryAll($sql, [
            ':id' => $itemid
        ]);
        return $data;
    }

    public function clear_cart($userid){
        $sql = "delete from cart_items where user_id = :userid";
        $data = $this->db->queryAll($sql, [
            ':userid' => $userid
        ]);
        return $data;
    }
}