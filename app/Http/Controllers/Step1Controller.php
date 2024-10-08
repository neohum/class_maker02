<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Step1Controller extends Controller
{
    //
    public function step1(Request $request)
    {
        
        
        $data = DB::table('excel_data')->where($_REQUEST['school'])->get();

        dd($data);
    return view('step1');
    }
}
