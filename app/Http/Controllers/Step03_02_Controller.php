<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Step03_02_Controller extends Controller
{
    public function index(Request $request)
    {
        $new_class = ['가', '나', '다', '라', '마', '바', '사', '아', '자', '차', '카', '타', '파', '하', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

        $data = [];
        $random = rand(0, 7);
        $table = [];

        function insert_new_class($data, $new_class, $rotate, $i)
        {

            $table = 'nclass' . ($rotate + 1) . 's';

                    DB::table($table)
                    ->insert([
                        'school_name' => $data[$i]->school_name,
                        'grade' => $data[$i]->grade,
                        'class' => $data[$i]->class,
                        'numbers' => $data[$i]->numbers,
                        'name' => $data[$i]->name,
                        'sex' => $data[$i]->sex,
                        'atitude' => $data[$i]->atitude,
                        'ability' => $data[$i]->ability,
                        'friendship' => $data[$i]->friendship,
                        'conditions' => $data[$i]->conditions,
                        'total' => $data[$i]->total,
                        'next_class' => $new_class[$rotate],
                        'name_split' => $data[$i]->name_split,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

        }


        function separate($data, $new_class)
        {
            if ($_REQUEST['next_class'] == 2) {
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    array_reduce($data, mix($rotate));
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 3){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 4){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 5){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 6){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 7){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 8){
                $j = 0;
                for ($i = 0; $i < count($data); $i++) {

                    $rotate = ($i) % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $j);
                    $j++;
                }
            }else if($_REQUEST['next_class'] == 9){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 10){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 11){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 12){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 13){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 14){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 15){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 16){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 17){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }else if($_REQUEST['next_class'] == 18){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }
            else if($_REQUEST['next_class'] == 19){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }
            else if($_REQUEST['next_class'] == 20){
                for ($i = 0; $i < count($data); $i++) {
                    $rotate = $i % $_REQUEST['next_class'];
                    insert_new_class($data, $new_class, $rotate, $i);
                }
            }


            // for ($i = 0; $i < count($data); $i++) {


            //         $rotate = $i % $_REQUEST['next_class'];


            //         switch ($rotate) {
            //             case 0:

            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;


            //             case 1:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 2:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 3:
            //                 insert_new_class($data, $new_class, $rotate, $i);
            //                 break;

            //             case 4:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 5:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 6:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 7:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 8:
            //                 insert_new_class($data, $new_class, $rotate, $i);
            //                 break;

            //             case 9:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 10:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 11:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 12:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 13:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 14:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 15:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 16:
            //                 insert_new_class($data, $new_class, $rotate, $i);
            //                 break;

            //             case 17:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 18:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 19:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;

            //             case 20:
            //                 insert_new_class($data, $new_class, $rotate, $i);

            //                 break;




            //         }


            // }
        }
        for ($i = 0; $i < $request->next_class; $i++) {
            $table = 'class' . ($i + 1) . 's';

            switch ($random) {
                case 0:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('total', 'desc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 1:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('total', 'asc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 2:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('atitude', 'desc')
                        ->orderBy('ability', 'desc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 3:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('ability', 'desc')
                        ->orderBy('friendship', 'desc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 4:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('friendship', 'asc')
                        ->orderBy('atitude', 'asc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 5:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('atitude', 'asc')
                        ->orderBy('ability', 'asc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 6:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('ability', 'asc')
                        ->orderBy('friendship', 'asc')
                        ->get();
                    separate($data, $new_class);
                    break;

                case 7:
                    $data = DB::table($table)
                        ->where('school_name', $request->school_name)
                        ->where('grade', $request->current_grade)
                        //->where('conditions', null)
                        ->orderBy('sex', 'desc')
                        ->orderBy('friendship', 'asc')
                        ->orderBy('atitude', 'asc')
                        ->get();
                    separate($data, $new_class);
                    break;

            }

        }



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
