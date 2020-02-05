<?php

namespace App\Controllers;
use App\Models\User;

class BanController extends Controller {
    public function index() {
        $users = (new User())->getAllUser();
        return $this->render('ban/index',['users' => $users]);
    }
    
    public function changeStatus(){
        if(!isset($this->request->params[0])){
            throw new Exception("Param[0] is required");
        }
        $userid = $this->request->params[0];
        $result = (new User())->toggleStatus($userid);
        return $this->redirect('ban');
    }
}