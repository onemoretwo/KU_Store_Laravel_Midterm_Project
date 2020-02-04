<?php

namespace App\Controllers;
use App\Models\Point_log;
use App\Models\User;

class EditController extends Controller {
    public function index() {
        $usersuse = (new Point_log())->point_log_use();
        $usersget = (new Point_log())->point_log_get();
        return $this->render('edit/index', ['usersget' => $usersget,'usersuse' => $usersuse]);
    }

    public function update(){
        $input = $this->request->input;

        $newEmail = $input->default_email;
        if($input->email != ""){
            $newEmail = $input->email;
        }
        $password = $input->pass;
        $result = (new User())->update($newEmail,$password);
        return $this->redirect('/edit');
    }

    public function update_pic(){
        
    }
}