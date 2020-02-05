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
        if($user->status == "ban"){
            return "Your account has been banned";
        }
        if ($user){
            if(password_verify($password,$user->password)){
                Session::write('Auth', [
                    'id' => $user->id,
                    'username' => $user->username,
                    'role' => $user->role
                ]);
                return $this->redirect('home');
            }else{
               echo "<script>alert('Sorry, Your password is incorrect.')</script>";
            }
        }else if($user!= $username){
            echo "<script>alert('Sorry, Your username is incorrect.')</script>";
            
        }else{
            echo "<script>alert('Please fill all inputs')</script>";
        }
        echo "<script>window.location.href = '/login'</script>";

    }

    public function signup(){
        $input = $this->request->input;
        $username = $input->username;
        $email = $input->email;
        $npwd = $input->npwd;
        $rpwd = $input->rpwd;

        if(empty($username) && empty($email) && empty($npwd) && empty($rpwd)){
            echo "<script>alert('All fields are required.')</script>";
            
        }

        if(!empty($username)){
            if(!empty($email)){
                if(!empty($npwd) and !empty($rpwd)){
                    if($npwd == $rpwd){
                        $hash = password_hash($npwd,PASSWORD_DEFAULT);
                        $result = (new User())->create_user($username,$email,$hash);
                        return $this->redirect('/login');
                    }else{
                        echo "<script>alert('Password doesn't match')</script>";
                        
                    }
                }else{
                    echo "<script>alert('Empty password')</script>";
                    
                }
            }else{
                echo "<script>alert('Please fill your E-mail')</script>";
               
            }
        }else{
            echo "<script>alert('Please fill your Username')</script>";
        }
        echo "<script>window.location.href = '/login'</script>";
    }

    public function logout() {
        Session::destroy();
        $this->redirect('login');
    }
}