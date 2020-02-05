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
        $password = $input->password;
        if ($user){
            if(password_verify($password,$user->password)){
                Session::write('Auth', [
                    'id' => $user->id,
                    'username' => $user->username,
                    'role' => $user->role
                ]);
                return $this->redirect('home');
            }else{
                return "incorrect password";
            }
        }else{
            return "incorrect username";
        }
    }

    public function signup(){
        $input = $this->request->input;
        $username = $input->username;
        $email = $input->email;
        $npwd = $input->npwd;
        $rpwd = $input->rpwd;

        if(empty($username) && empty($email) && empty($npwd) && empty($rpwd)){
            return "No input";
        }

        if(!empty($username)){
            if(!empty($email)){
                if(!empty($npwd) and !empty($rpwd)){
                    if($npwd == $rpwd){
                        $hash = password_hash($npwd,PASSWORD_DEFAULT);
                        $result = (new User())->create_user($username,$email,$hash);
                        return $this->redirect('/login');
                    }else{
                        return "password doesn't match";
                    }
                }else{
                    return "warning: empty password";
                }
            }else{
               return "Email : this field doesn't empty"; 
            }
        }else{
            return "username: this field doesn't empty";
        }
    }

    public function logout() {
        Session::destroy();
        $this->redirect('login');
    }
}