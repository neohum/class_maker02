<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Step01Controller extends Controller
{
    //
    public function index(Request $request)
    {
        if ( isset($_REQUEST['school_name']) && isset($_REQUEST['current_grade']) && isset($_REQUEST['next_class']) ) {
            $data = DB::table('excel_data')
                ->where('school_name', $request->school_name)
                ->orderBy('total', 'desc')
                ->get();

            foreach ($data as $key => $value) {


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
                    'total' => $value->total,
                    'next_class' => $key % $_REQUEST['next_class'] + 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }


                $new_data = DB::table('step01s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->orderBy('next_class', 'asc')
                    ->orderBy('sex', 'desc')
                    ->orderBy('name', 'asc')
                    ->get();
           

              for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {

                $old_data[$i] = DB::table('step01s')
                    ->where('next_class', $i)
                    ->orderBy('current_class', 'asc')
                    ->orderBy('sex', 'desc')
                    ->orderBy('name', 'asc')
                    ->get();
            }




            return view('step01', [
                'school_name' => $request->school_name,
                'current_grade' => $request->current_grade,
                'next_class' => $request->next_class,
                'new_data' => $new_data,
                'new_class' => $_REQUEST['next_class'],
                'data' => $new_data,
                'old_data' => $old_data
            ]);
        } else {
            return view('step01');
        }


    }

    public function store(Request $request)
    {

        redirect()->route('step01_store', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'next_class' => $request->next_class,
            'new_class' => $request->next_class
        ]);
    }
}
