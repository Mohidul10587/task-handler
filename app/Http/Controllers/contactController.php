<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\Controller as ControllersController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class contactController extends Controller{

    public function getContactPage (){
        return view ("contact");
    }
    public function sendData (Request $req){
        $contact = new Contact;
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->pass = $req->pass;
        $contact->age = $req->age;

        $contact->save();
        return redirect('/');
    }
}

