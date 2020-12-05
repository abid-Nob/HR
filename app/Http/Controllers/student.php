<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class student extends Controller
{
    public function index(){
        $data['tblstudent']=DB::select("select * from tblstudents");
        return view('student.index',$data);
    }
    public function admission()
    {
        
    }
}
