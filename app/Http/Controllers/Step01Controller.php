<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Step01Controller extends Controller
{
    public function index(Request $request)
    {

            $data = [];
                for($i = 1; $i <= $request->current_class; $i++){
                    $data[$i] = DB::table('excel_data')
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        ->where('class', $i)
                        ->get()
                        ->count();
                }






            $new_data = DB::table('excel_data')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('class', 'asc')
                ->orderBy('numbers', 'asc')
                ->get();


            return view('step01', [
                'data' => $new_data,
                'school_info' => $data,
                'school_name' => $request->school_name,
                'current_grade' => $request->current_grade,
                'current_class' => $request->current_class,
                'next_grade' => $request->next_grade,
                'next_class' => $request->next_class,
                
            ]);

    }

}

