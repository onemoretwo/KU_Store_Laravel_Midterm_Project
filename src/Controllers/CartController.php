<?php

namespace App\Controllers;
use App\Framework\Utilities\Session; 
use App\Controllers\Item;

class CartController extends Controller {
    public function index() {
        $cart = Session::read('cart');
        $data = (new Item())->get_cart_item($cart);
        return $this->render('cart/index',['cart',$data]);
    }
}