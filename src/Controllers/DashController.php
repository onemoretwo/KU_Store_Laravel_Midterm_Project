<?php

namespace App\Controllers;

class DashController extends Controller {
    public function index() {
        return $this->render('dash/index');
    }
    
}