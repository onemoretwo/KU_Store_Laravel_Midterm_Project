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
        // if(!isset($this->request->params[0])){
        //     throw new Exception("Param[0] is required");
        // }
        $auth = Session::read('Auth');
        $itemid = $this->request->params[0];
        $data = (new Cart_item())->add($auth['id'],$itemid);
        return $this->redirect('/home');
    }
}