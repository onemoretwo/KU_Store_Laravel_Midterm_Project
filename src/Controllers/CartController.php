<?php

namespace App\Controllers;
use App\Framework\Utilities\Session; 
use App\Models\Cart_item;
use App\Models\User;
use App\Models\Point_log;

class CartController extends Controller {
    public function index() {
        $auth = Session::read('Auth');
        $carts = (new Cart_item())->get_mycart($auth['id']);
        return $this->render('cart/index', ['carts' => $carts]);
    }

    public function delete_cart_item(){
        if(!isset($this->request->params[0])){
            throw new Exception("Param[0] is required");
        }
        $itemid = $this->request->params[0];
        $result = (new Cart_item())->del_mycart($itemid);
        return $this->redirect('cart');
    }

    public function submit_paid(){
        if(!isset($this->request->params[0])){
            throw new Exception("Param[0] is required");
        }
        $totalpaid = $this->request->params[0];
        $auth = Session::read('Auth');
        $user = (new User())->find_user($auth['username'])[0];
        $userid = $auth['id'];
        $point = $totalpaid/20;
        $totalpoint = $user->point + $point;
        $clearCart = (new Cart_item())->clear_cart($userid);
        $addPoint = (new User())->addPoint($userid,$totalpoint);
        $createlog = (new Point_log())->create_log($userid,'get',$point);
        return $this->redirect('cart');
    }
}