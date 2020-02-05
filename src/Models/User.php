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

    public function update_pic($url){
        $sql = "update users set image_path = ".$url." where id = 1";
        $data = $this->db->queryAll($sql);
    }

    public function update($email,$password,$id){
        $sql = "UPDATE `users`"
                . " SET `email` = :email, `password` = :password"
                . " WHERE `id` = :id";
        $data = $this->db->queryAll($sql,[
            ':email' => $email,
            ':password' => $password,
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
    
}