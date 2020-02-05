<?php

namespace App\Models;
use App\Framework\Utilities\Session; 

class User extends Model{
    //เชื่อมกับ table `users`
    

    public function Top5()
    {
        $data = $this->db->queryAll("select * from ". $this->table . " ORDER BY POINT DESC LIMIT 5");
        return $data;
    }

    public function update($email,$password,$image_path,$id){
        $sql = "UPDATE `users`"
                . " SET `email` = :email, `password` = :password, `image_path` = :image_path"
                . " WHERE `id` = :id";
        $data = $this->db->queryAll($sql,[
            ':email' => $email,
            ':password' => $password,
            ':image_path' => $image_path,
            ':id' => $id
        ]);
        return $data;
    }

    public function create_user($username,$email,$password){
        $sql = "INSERT INTO users (`username`, `password`, `email`, `image_path`, `role`, `point`, `create_at`)"
                . " VALUES (:username, :password, :email, '/images/user_img/profiletest1.png', 'user', '0', NOW())";
        $data = $this->db->queryAll($sql,[
            ':username' => $username,
            ':password' => $password,
            ':email' => $email
        ]);
        return $data;
    }

    public function find_user($username){
        $sql = "select * from users where username = :username limit 1";
        $data = $this->db->queryAll($sql,[':username' => $username]);
        return $data;
    }
    
    public function addPoint($userid,$point){
        $sql = "UPDATE `users`"
                . " SET point = :point"
                . " WHERE id = :id";
        $data = $this->db->queryAll($sql,[
            ':point' => $point,
            ':id' => $userid
        ]);
        return $data;
    }

    public function getAllUser(){
        $sql = "select * from users where `role` = 'user'";
        $data = $this->db->queryAll($sql);
        return $data;
    }

    public function toggleStatus($id){
        $sql = "select * from users where id = :id";
        $user = $this->db->queryFirst($sql,[
            ':id' => $id
        ]);
        $userStatus = $user->status;
        $newStatus = 'ban';
        if($userStatus == 'ban'){
            $newStatus = 'active';
        }
        $sql = "UPDATE `users`"
                . " SET `status` = :status"
                . " WHERE id = :id";
        $result = $this->db->queryAll($sql,[
            ':status' => $newStatus,
            ':id' => $id
        ]);
        return $result;
    }
}