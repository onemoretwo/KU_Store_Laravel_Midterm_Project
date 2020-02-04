<?php

namespace App\Controllers;
use App\Framework\Utilities\Session;
use App\Models\User;

class LoginController extends Controller {
    public function index() {
        return $this->render('login/index');
    }

    public function authen() {
        $input = $this->request->input;
        $username = $input->username;
        $user = (new User())->find_user($username)[0];
        $password = $user->password;
        if ($user && ($input->password === $password)) { //password_verify($password, $user->password)
            Session::write('Auth', [
                'id' => $user->id,
                'username' => $user->username,
                'role' => $user->role
            ]);
            return $this->redirect('cart');
        }else{
            echo "incorrect";
        }
    }

    public function logout() {
        Session::destroy();
        $this->redirect('login');
    }
}