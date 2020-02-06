<?php

namespace App\Controllers;
use App\Models\User;
use App\Framework\Utilities\Session;

use Exception;

class BanController extends Controller {
    public function index() {
        $auth = Session::read('Auth');

        if (!$auth or $auth['role'] != 'admin') {
            return 'You have no permission';
        }
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

    public function search(){
        $input = $this->request->input;
        $keyword = $input->keyword;
        $users = (new User())->search($keyword);
        return $this->redirect('/ban', ['users' => $users]);
    }
}