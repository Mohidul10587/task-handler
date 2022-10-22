<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class newformController extends Controller
{
    public function getNewForm()
    {
        return view("newform");
    }

    public function sendNewPost(Request $req)
    {

        $postdata = new Post;
        $postdata->name = $req->name;
        $postdata->email = $req->email;
        $postdata->save();
        return redirect('/');
    }
}
