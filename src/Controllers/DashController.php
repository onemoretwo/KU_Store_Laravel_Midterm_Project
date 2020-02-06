<?php

namespace App\Controllers;

class DashController extends Controller {
    public function index() {
        $auth = Session::read('Auth');
        $usersuse = (new Point_log())->point_log_use($auth['id']);
        $usersget = (new Point_log())->point_log_get($auth['id']);
        return $this->render('edit/index', ['usersget' => $usersget,'usersuse' => $usersuse]);
    }
    
}