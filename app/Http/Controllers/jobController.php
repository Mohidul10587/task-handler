<?php

namespace App\Http\Controllers;

use App\Models\Postdata;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class jobController extends Controller
{
    public function getJobPage()
    {
        return view("admin/job");
    }
    public function sendPostedJobsData(Request $req)
    {
        $postedData = new Postdata;
        $postedData->folder_name = $req->folder_name;
        $postedData->job_id = $req->job_id;
        $postedData->job_type = $req->job_type;
        $postedData->instruction = $req->instruction;
        $postedData->total_image = $req->total_image;
        $postedData->amount = $req->amount;
        $postedData->goole_drive_link = $req->goole_drive_link;
        $postedData->deadline_date = $req->deadline_date;
        $postedData->deadline_time = $req->deadline_time;
        $postedData->empoyee_name = $req->empoyee_name;
        $postedData->save();
        return redirect('/');
    }
}
