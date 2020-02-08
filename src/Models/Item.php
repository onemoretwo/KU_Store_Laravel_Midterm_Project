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
    public function productList(){
        $sql = "select * from items";
        $data = $this->db->queryAll($sql);
        return $data;

    }
    public function insert($name,$type,$price, $desc,$image_path) {
        $sql = "INSERT INTO `items` (`name`,`type`,`price`,`description`,`create_at`,`image_path`)"
                ." VALUES (:name, :type, :price, :description, NOW(), :image_path)";
        $data = $this->db->queryAll($sql, [
        ':name' => $name,
        ':type' => $type,
        ':price' => $price,
        ':description' => $desc,
        ':image_path' => $image_path
        ]);
        return $data;
    }
    
    public function delete($itemid){
        $sql ="DELETE FROM items WHERE id = :id";
        $data = $this->db->queryAll($sql,[
            ':id' => $itemid
        ]);
        return $data;
    }
}