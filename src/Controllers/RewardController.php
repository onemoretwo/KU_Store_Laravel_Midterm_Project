<?php

namespace App\Controllers;
use App\Models\User;
use App\Framework\Utilities\Session;
use App\Models\Coupon;
use App\Models\Point_log;

use Exception;

class RewardController extends Controller {
    public function index()
    {
        $users = (new User())->Top5();
        return $this->render('reward/index', ['users' => $users]);
    }

    public function getCoupon(){
        if(!isset($this->request->params[0])){
            throw new Exception("Params[0] is required");
        }
        $type = $this->request->params[0];
        $auth = Session::read('Auth');
        $user = (new User())->find_user($auth['username'])[0];
        $userid = $auth['id'];
        $code = substr(md5(uniqid(mt_rand(), true)) , 0, 10);
        $result = (new Coupon())->addCoupon($userid,$type,'available',$code);
        if($type == 'normal'){
            $use_point = 250;
        }else{
            $use_point = 750;
        }
        $newPoint = $user->point - $use_point;
        $usePointResult = (new Point_log())->create_log($userid,'use',$use_point);
        if($newPoint < 0){
            return "Your point not enough";
        }
        $result1 = (new User())->addPoint($userid,$newPoint);
        return $this->redirect('reward');
    }
}