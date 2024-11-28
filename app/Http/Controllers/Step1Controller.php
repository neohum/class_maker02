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


    return view('step1', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'current_class' => $request->current_class,
        'next_grade' => $request->next_grade,
        'next_class' => $request->next_class,
        'data' => $data,
    ]);
    }
}
