<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Step03_02_Controller extends Controller
{
    public function index(Request $request)
    {

        $data = [];
        $random = rand(0, 7);
        
        $table = 'class' . ($rotate+1). 's';
        for ($i = 0; $i < count($table); $i++) {
            $table[$i] = 'nclass' . $i . 's';
        }
        $rotate =









        return view('step03_02', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
            'data' => $data,
        ]);

    }
}
