<?php

namespace App\Controllers;
use App\Models\User;

use Exception;

class BanController extends Controller {
    public function index() {
        if (!$this->request->input) {
            $input = $this->request->input;
            $keyword = $input->keyword;
            $users = (new User())->search($keyword);
            return $this->render('ban/index',['users' => $users]);
        } else {
            $users = (new User())->getAllUser();
            return $this->render('ban/index',['users' => $users]);
        }
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