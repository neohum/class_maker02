<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Step01Controller extends Controller
{
    public function index(Request $request)
    {
        $datas = DB::table('step01s')
            ->where('school_name', $request->school_name)
            ->where('grade', $request->current_grade);


            foreach ($datas as $key => $value) {


                if (DB::table('excel_data')
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->grade)
                        ->select('name_split')
                        ->havingRaw('count(name_split) > 2')
                        ->groupBy('name_split')
                        ->get('name_split')
                    ){
                     if(DB::table('excel_data')
                    ->where('school_name', $request->school_name)
                    ->where('grade', $request->grade)
                    ->where('name_split', $request->name_split)
                    ->count() > 1){
                        $value->name_split = $request->name_split. '은 중복입니다.';
                    }

                    }else{
                        $value->name_split = '';
                    }

                    $new_data = DB::table('excel_data')
                        ->where('school_name', $_REQUEST['school_name'])
                        ->where('grade', $_REQUEST['current_grade'])
                        ->orderBy('class', 'asc')
                        ->orderBy('numbers', 'asc')
                        ->get();
                //
            }
            return view('step01', [
                'data' => $new_data,

                'school_name' => $request->school_name,
            ]);
        }


}

