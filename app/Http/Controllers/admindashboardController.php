<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admindashboardController extends Controller
{
   
    public function getAdminDashBoard(){
        return view('admin/admindashboard');
    }
    public function getUsers(Request $req)
    {
        $data = DB::table('users')->get();
        return view('admin/admindashboard', ['data' => $data]);
    }
}