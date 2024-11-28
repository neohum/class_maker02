<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Step03_03_Controller extends Controller
{
    //
    public function index(Request $request) {
        for($i = 1; $i <= $request->current_class; $i++){
            $table = 'nclass' . $i . 's';
            $db = DB::table($table)
                ->where('school_name', $request->school_name)
                ->where('grade', $request->current_grade)
                ->get()
                ->count();
            $excel_table = DB::table('excel_data')
                ->where('school_name', $request->school_name)
                ->where('grade', $request->current_grade)
                ->get()
                ->count();
            if ($db > ceil($excel_table / $request->current_class)) {
                $table = 'nclass' . $db . 's';
                $data = DB::table($table)
                    ->where('school_name', $request->school_name)
                    ->where('grade', $request->current_grade)
                    ->where('numbers')
                    ->delete();
            }


        }

        return view('step03_03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
            // 'data' => $data,
        ]);
    }
}

