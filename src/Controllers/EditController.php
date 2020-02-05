<?php

namespace App\Controllers;
use App\Models\Point_log;
use App\Models\User;
use App\Framework\Utilities\Session; 

class EditController extends Controller {

    public function index() {
        $auth = Session::read('Auth');
        $usersuse = (new Point_log())->point_log_use($auth['id']);
        $usersget = (new Point_log())->point_log_get($auth['id']);
        return $this->render('edit/index', ['usersget' => $usersget,'usersuse' => $usersuse]);
    }

    public function update(){
        $file_name = $_FILES['file']['name'];
        $file_tem_Loc =$_FILES['file']['tmp_name'];
        $file_store = "images/user_img/".$file_name;

        $auth = Session::read('Auth');
        $input = $this->request->input;
        $current = $input->cpwd;
        $new = $input->npwd;
        $repeat = $input->rpwd;
        $user = (new User())->find_user($auth['username'])[0];;
        $old = $user->password;
        $newEmail = $input->cemail;
        $image_path = $user->image_path;
        if($file_store != "images/user_img/"){
            move_uploaded_file($file_tem_Loc, $file_store);
            $image_path = $file_store;
        }
        if($input->email != ""){
            $newEmail = $input->email;
        }
        if($file_store == "images/user_img/" && empty($input->email) && empty($current) && empty($new) && empty($repeat)){
            echo "<script>alert('Please fill all inputs.')</script>";
        }
        if(!empty($current) or !empty($new) or !empty($repeat)){
            if(!empty($current)){
                if(!password_verify($current,$user->password)){
                    echo "<script>alert('Current password is incorrect')</script>";
                }
                if(!empty($new) and !empty($repeat)){
                    if($new == $repeat){
                        $result = (new User())->update($newEmail,password_hash($new,PASSWORD_DEFAULT),$image_path,$auth['id']);
                        return $this->redirect('/edit');
                    }else{
                        echo "<script>alert('password doesn't match')</script>";
                        
                    }
                }else{
                    echo "<script>alert('Please enter your new password')</script>";
                    
                }
            }else{
                echo "<script>alert('Please enter your current password.')</script>";
                
            }
        }else{
            $result = (new User())->update($newEmail,$old,$image_path,$auth['id']);
            return $this->redirect('/edit');
        }
    }
}