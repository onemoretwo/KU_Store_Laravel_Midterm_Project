<?php

namespace App\Controllers;
use App\Models\User;
use App\Framework\Utilities\Session;
use App\Models\Coupon;

class RewardController extends Controller {
    public function index()
    {
        $users = (new User())->Top5();
        return $this->render('reward/index', ['users' => $users]);
    }

    public function getCoupon(){
        // if(!isset($this->request->params[0])){
        //     throw new Exception("Param[0] is required");
        // }
        $type = $this->request->params[0];
        $auth = Session::read('Auth');
        $userid = $auth['id'];
        $code = substr(md5(uniqid(mt_rand(), true)) , 0, 10);
        $result = (new Coupon())->addCoupon($userid,$type,'available',$code);
        return $code;
    }
}