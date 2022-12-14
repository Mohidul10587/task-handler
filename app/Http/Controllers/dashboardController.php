<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\Controller as ControllersController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class dashboardController extends Controller{

    public function getDashboard (){
        return view ("dashboard");
    }
    public function userdata(Request $req)
    {
        $data = DB::table('postdatas')->get();
        return view('dashBoard', ['data' => $data]);
    }
}

