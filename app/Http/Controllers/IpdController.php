<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ipd;
use App\Models\Hospital;
use Illuminate\Support\Facades\Storage;


class IpdController extends Controller
{
    function savedata(Request $req){
        Ipd::create($req->all());

    }

    function showdata(){
        $data = Ipd::all();
        return view('admin', compact('data'));
    }
    function hosp_list(){
        $hosp = Hospital::all();
        return view('welcome', compact('hosp'));
    }
    public function upload(Request $request){
        $request->file('file')->store('uploads');
    }
    public function download(Request $request,$file){
        return response()->download(public_path('storage\app\uploads'.$file));

    }
    
}
