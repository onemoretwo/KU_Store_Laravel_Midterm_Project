<?php

namespace App\Controllers;
use App\Framework\Utilities\Session;



class HomeController extends Controller {
    public function index() {
        return $this->render('home/shirt');
    }

    public function ajax_add(){
        $carts = Session::read('cart');
        if (!$carts) {
            $carts = [];
        }
        if(!isset($this->request->params[0])){
            throw new Exception("Param[0] is required");
        }
        $itemid = $this->request->params[0];
        if(array_search($itemid, $carts) === false){
            array_push($carts, $itemid);
        }
        Session::write('cart', $carts);
        return $carts;
    }

    public function clear_cart() {
        Session::write('cart', []);
    }
}