<?php

namespace App\Controllers;
use App\Models\User;

class RewardController extends Controller {
    public function index()
    {
        $users = (new User())->Top5();
        return $this->render('reward/index', ['users' => $users]);
    }
}