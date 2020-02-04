<?php

namespace App\Controllers;

class AController extends Controller {
    public function index() {
        return $this->render('a/index');
    }
    
}