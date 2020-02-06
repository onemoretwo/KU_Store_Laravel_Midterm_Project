<?php

namespace App\Models;  

class Coupon extends Model{
    public function addCoupon($id,$type,$status,$coupon_code){
        $sql = "INSERT INTO coupons (`user_id`, `type`, `coupon_code`, `status`, `create_at`)"
                . " VALUES (:user_id, :type, :code, :status, NOW())";
        $data = $this->db->queryAll($sql, [
            ':user_id' => $id,
            ':type' => $type,
            ':code' => $coupon_code,
            ':status' => $status
        ]);
        return $data;
    }

    public function findCoupon($id,$coupon_code){
        $sql = "select * from coupons where `user_id` = :id and `status` = 'available' and `coupon_code` = :code" ;
        $data = $this->db->queryFirst($sql, [
            ':id' => $id,
            ':code' => $coupon_code
        ]);
        return $data;
    }

    public function useCoupon($id){
        $sql = "UPDATE `coupons`"
                . " SET `status` = 'used'"
                . " WHERE `id` = :id";
        $data = $this->db->queryAll($sql, [
            ':id' => $id
        ]);
        return $data;
    }
}