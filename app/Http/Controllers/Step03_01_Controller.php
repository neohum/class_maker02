<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Step03_01_Controller extends Controller
{
    public function index(Request $request)
    {
        $new_class = ['가', '나', '다', '라', '마', '바', '사', '아', '자', '차', '카', '타', '파', '하', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];


        $data = DB::table('step01s')
            ->where('school_name', $request->school_name)
            ->where('grade', $request->current_grade)
            ->where('conditions', 1)
            ->get();


        //dd($data);
        $temp = [];
        for ($i = 0; $i < count($data); $i++) {
            $rotate = $i % $_REQUEST['next_class'];

            //dd($rotate);
            switch ($rotate) {
                case 0:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 1:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 2:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 3:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 4:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 5:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 6:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 7:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 8:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 9:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 10:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 11:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 12:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 13:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 14:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 15:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 16:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 17:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 18:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 19:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;

                case 20:
                    $table = 'nclass' . ($rotate+1) . 's';
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
                        ]);

                    break;


            }

            // $new_data = DB::table($table)
            // ->insert([
            //     'school_name' => $data[$i]->school_name,
            //     'grade' => $data[$i]->grade,
            //     'class' => $data[$i]->class,
            //     'numbers' => $data[$i]->numbers,
            //     'name' => $data[$i]->name,
            //     'sex' => $data[$i]->sex,
            //     'atitude' => $data[$i]->atitude,
            //     'ability' => $data[$i]->ability,
            //     'friendship' => $data[$i]->friendship,
            //     'conditions' => $data[$i]->conditions,
            //     'total' => $data[$i]->total,
            //     'next_class' => $data[$i]->next_class,
            //     'name_split' => $data[$i]->name_split,
            //     'created_at' => now(),
            // ]);
        }

        return view('step03_01', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
            'data' => $data,
        ]);

    }
}
