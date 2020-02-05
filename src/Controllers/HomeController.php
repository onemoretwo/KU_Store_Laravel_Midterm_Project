<?php

namespace App\Controllers;
use App\Framework\Utilities\Session;
use App\Models\Cart_item;
use App\Models\Item;



class HomeController extends Controller {
    public function index() {
        $products = (new Item())->productList();
        return $this->render('home/shirt',[
            'products' => $products
        ]);
    }

    public function add(){
        if(!isset($this->request->params[0])){
            throw new Exception("Param[0] is required");
        }
        $auth = Session::read('Auth');
        $itemid = $this->request->params[0];
        $data = (new Cart_item())->add($auth['id'],$itemid);
        return $this->redirect('/home');
    }

    // public function add(){
    //     $carts = Session::read('cart');
    //     if (!$carts) {
    //         $carts = [];
    //     }
    //     if(!isset($this->request->params[0])){
    //         throw new Exception("Param[0] is required");
    //     }
    //     $itemid = $this->request->params[0];
    //     if(array_search($itemid, $carts) === false){
    //         array_push($carts, $itemid);
    //     }
    //     Session::write('cart', $carts);
    //     return $carts;
    // }

    public function clear_cart() {
        Session::write('cart', []);
    }
}