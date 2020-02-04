<?php

namespace App\Controllers;

class LoginController extends Controller {
    public function index() {
        return $this->render('login/index');
    }

    public function authen() {
        $input = $this->request->input;

        $user = (new User())->select_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            Session::write('Auth', [
                'user_id' => $user->id,
                'name' => $user->name,
                'role' => 'Admin'
            ]);
        }
        return $this->render('users/sessionGet');
    }
}