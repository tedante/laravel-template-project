<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use crocodicstudio\crudbooster\controllers\AdminDashboardController;

class DashboardController extends AdminDashboardController
{
    public function getIndex() {
        $data = [];
        $data['page_title'] = "Dashboard";
        return view("dashboard", $data);
    }
}
