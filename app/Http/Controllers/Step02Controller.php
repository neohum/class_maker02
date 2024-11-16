<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Step02Controller extends Controller
{

    public function index(Request $request)
    {

        $data = DB::table('excel_data')
            ->where('school_name', $request->school_name)
            ->where('grade', $request->current_grade)
            ->get();

        foreach ($data as $key => $value) {

            if (
                DB::table('excel_data')
                    ->where('school_name', $request->school_name)
                    ->where('grade', $value->grade)
                    ->select('name_split')
                    ->havingRaw('count(name_split) > 1')
                    ->groupBy('name_split')
                    ->get('name_split')
            ) {
                if (
                    DB::table('excel_data')
                        ->where('school_name', $request->school_name)
                        ->where('grade', $value->grade)
                        ->where('name_split', $value->name_split)
                        ->groupBy('name_split')
                        ->count() > 1
                ) {
                    $value->name_split = $value->name_split . '은(는) 중복입니다.';

                } else {
                    $value->name_split = '';
                }

                DB::table('step01s')->insert([
                    'school_name' => $request->school_name,
                    'grade' => $value->grade,
                    'class' => $value->class,
                    'numbers' => $value->numbers,
                    'name' => $value->name,
                    'sex' => $value->sex,
                    'atitude' => $value->atitude,
                    'ability' => $value->ability,
                    'friendship' => $value->friendship,
                    'conditions' => $value->conditions,
                    'total' => $value->total,
                    'next_class' => $value->next_class,
                    'name_split' => $value->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);



            }
        }

            $class = [];
            for ($i = 1; $i <= 20; $i++) {
                $class[$i] = DB::table('class' . $i . 's')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('next_class', 'asc')
                    ->orderBy('sex', 'desc')
                    ->orderBy('name', 'asc')
                    ->get();
            }



            $step01 = DB::table('step01s')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();





            return view('step02', [
                'school_name' => $request->school_name,
                'current_grade' => $request->current_grade,
                'current_class' => $request->current_class,
                'next_grade' => $request->next_next_grade,
                'next_class' => $request->next_class,
                'data' => $step01,
            ]);

    }








    public function store(Request $request)
    {

        redirect()->route('step03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'next_class' => $request->next_class,
            'class' => $request->next_class
        ]);
    }
}
