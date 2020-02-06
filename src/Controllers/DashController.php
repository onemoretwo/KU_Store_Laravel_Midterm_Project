<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\Point_log;

class DashController extends Controller {
    public function index() {
        $input = $this->request->input;
        if (isset($input->bday)) {

            $date = $input->bday;
            $all_get = (new Point_log())->search_date($date);

        } else {
            $all_get = (new User())->all_get_log();
        }
        $all_use = (new User())->all_use_log();
        $totalUsers = count((new User())->getAllUser());
        $totalPointUse = (new Point_log())->getAllPointUse();
        return $this->render('dash/index',[
            'date' => $date,
            'allget' => $all_get,
            'totalUsers' => $totalUsers,
            'totalPointUse' => $totalPointUse->total
        ]);
    }
    
    public function export(){
        $result = (new User())->all_get_log();
        $file_name = "Street-store.xls";
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$file_name\"");
        $flag = false;
        $count = 1;
        foreach ($result as $row){
            if(!$flag){
                echo implode("\t", ['No.','Username','point get']) . "\r\n";
                $flag = true;
            }
            echo implode("\t", [$count, $row->username, $row->totalget]) . "\r\n";
            ++$count;
        }
        exit;
    }
}