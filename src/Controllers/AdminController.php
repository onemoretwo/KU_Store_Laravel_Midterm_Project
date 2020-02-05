<?php

namespace App\Controllers;
use App\Models\Item;
use App\Framework\Utilities\Session; 

class AdminController extends Controller {
    public function index() {
        {
            $products = (new Item())->productList();
            // var_dump($products);
            return $this->render('admin/index', ["products" => $products]);
        }
    }
 
    
    public function upload_item(){
        $item = Session::read('Auth');
        $file_name = $_FILES['file']['name'];
        $file_tem_Loc =$_FILES['file']['tmp_name'];
        $file_store = "images/".$file_name;
        

        move_uploaded_file($file_tem_Loc, $file_store);
        
        
        $input = $this->request->input;
        $name = $input->name;
        $type = $input->type;
        $price = $input->price;
        $desc = $input->desc;
        
        // return $name." ".$type." ".$price." ".$desc." ".$file_store;
        $result = (new Item())->insert($name,$type,$price, $desc,$file_store);
        return $this->redirect('admin');
    }
}