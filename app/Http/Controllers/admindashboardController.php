<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admindashboardController extends Controller
{
   
    public function getAdminDashBoard(){
        return view('admin/admindashboard');
    }
}
