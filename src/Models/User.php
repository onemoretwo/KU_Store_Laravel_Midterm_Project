<?php

namespace App\Models;

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

    public function update($email,$pass){
        $sql = "update users set email = :email, `password` = :pass where id = 1";
        $data = $this->db->queryAll($sql,[':email' => $email,':pass' => $pass]);
    }

    public function find_user($username){
        $sql = "select * from users where username = :username limit 1";
        $data = $this->db->queryAll($sql,[':username' => $username]);
        return $data;
    }
}