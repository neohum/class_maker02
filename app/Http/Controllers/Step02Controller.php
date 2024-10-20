<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Step02Controller extends Controller
{


public function index(Request $request)
    {
           $case = rand(1, 4);
           $name_repeat =[];

            //
           switch ($case)
            {
                case 1:
                    $data1 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where('sex', '남')
                        ->orderBy('total', 'desc')
                        ->get();
                    $data2 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where('sex', '여')
                        ->orderBy('total', 'asc')
                        ->get();

                    break;
                case 2:
                    $data1 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where( 'sex', '남')
                        ->orderBy('atitude', 'asc')
                        ->get();
                    $data2 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where('sex', '여')
                        ->orderBy('atitude', 'desc')
                        ->get();
                    break;
                case 3:
                    $data1 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->orderBy('ability', 'desc')
                        ->get();
                    $data2 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where( 'sex', '여')
                        ->orderBy('ability', 'desc')
                        ->get();
                    break;
                case 4:
                    $data1 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where('sex', '남')
                        ->orderBy('friendship', 'asc')
                        ->get();
                    $data2 = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->where('sex', '여')
                        ->orderBy('friendship', 'asc')
                        ->get();
                    break;
            }




            foreach ($data1 as $key => $value) {


                if (DB::table('step01s')
                        ->where('school_name', $request->school_name)
                        ->where('grade', $value->grade)
                        ->select('name_split')
                        ->havingRaw('count(name_split) > 1')
                        ->groupBy('name_split')
                        ->get('name_split')
                    ){
                     if(DB::table('excel_data')
                    ->where('school_name', $request->school_name)
                    ->where('grade', $value->grade)
                    ->where('name_split', $value->name_split)
                    ->count() > 1){
                        $value->name_split = $value->name_split. '은(는) 중복입니다.';
                    }

                    }else{
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
                    'total' => $value->total,
                    'next_class' => ($key % $_REQUEST['next_class']) + 1,
                    'name_split' => $value->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

        foreach ($data2 as $key => $value) {
             if (DB::table('step01s')
                        ->where('school_name', $request->school_name)
                        ->where('grade', $value->grade)
                        ->select('name_split')
                        ->havingRaw('count(name_split) > 1')
                        ->groupBy('name_split')
                        ->get('name_split')
                    ){
                     if(DB::table('excel_data')
                    ->where('school_name', $request->school_name)
                    ->where('grade', $value->grade)
                    ->where('name_split', $value->name_split)
                    ->count() > 1){
                        $value->name_split = $value->name_split. '은(는) 중복입니다.';
                    }

                    }else{
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
                'total' => $value->total,
                'next_class' => ($key % $_REQUEST['next_class']) + 1,
                'name_split' => $value->name_split,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }



            $new_data = DB::table('step01s')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('next_class', 'asc')
                ->orderBy('sex', 'desc')
                ->orderBy('name', 'asc')
                ->get();



        //    $name_repeat = (DB::table('step01s')
        //         ->where('school_name', $request->school_name)
        //         ->select('name_split')
        //         ->havingRaw('count(name_split) > 2')
        //         ->groupBy('name_split')
        //         ->get('name_split'));
        //     $name_repeat = array_map(function ($value) {
        //         return $value->name_split;
        //     }, $name_repeat->toArray());





            return view('step02', [
                'school_name' => $request->school_name,
                'current_grade' => $request->current_grade,
                'next_class' => $request->next_class,
                'new_data' => $new_data,
                'new_class' => $_REQUEST['next_class'],
                'data' => $new_data,
                'name_repeat' => json_encode($name_repeat, JSON_UNESCAPED_UNICODE)
            ]);

    }



    public function store(Request $request)
    {

        redirect()->route('step03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'next_class' => $request->next_class,
            'new_class' => $request->next_class
        ]);
    }
}




