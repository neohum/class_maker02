<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class Step02Controller extends Controller
{

    public function index(Request $request)
    {
        // 이름 중복
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
        // 이름 중복
        // 반편성
        $new_class = ['가', '나', '다', '라', '마', '바', '사', '아', '자', '차', '카', '타', '파', '하', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        $new_data = [];
        $rotate = 0;
        $random = rand(0, 7);


        switch ($random){
            case 0:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')
                            ->orderBy('numbers', 'asc')
                            ->orderBy('total', 'desc')
                            ->get();
                break;
            case 1:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')
                            ->orderBy('numbers', 'asc')
                            ->orderBy('total', 'asc')
                            ->get();
                break;
            case 2:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')
                            ->orderBy('name', 'asc')
                            ->orderby('atitude', 'desc')
                            ->get();
                break;
            case 3:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')

                            ->orderby('ability', 'desc')
                            ->get();
                break;
            case 4:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')

                            ->orderby('friendship', 'desc')
                            ->get();
                break;
            case 5:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')

                            ->orderby('atitude', 'asc')
                            ->get();
                break;
            case 6:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')

                            ->orderby('ability', 'asc')
                            ->get();
                break;

            case 7:
                $new_data = DB::table('step01s')
                            ->where('school_name', $_REQUEST['school_name'])
                            ->where('grade', $_REQUEST['current_grade'])
                            ->orderBy('class', 'asc')

                            ->orderby('friendship', 'asc')
                            ->get();
                break;

        }



        $counter = 0;

        function get_next_class($table, $new_class, $new_data, $rotate, $key)
        {


            DB::table($table)->insert([
                'school_name' => $new_data[$key]->school_name,
                'grade' => $new_data[$key]->grade,
                'class' => $new_data[$key]->class,
                'numbers' => $new_data[$key]->numbers,
                'name' => $new_data[$key]->name,
                'sex' => $new_data[$key]->sex,
                'atitude' => $new_data[$key]->atitude,
                'ability' => $new_data[$key]->ability,
                'friendship' => $new_data[$key]->friendship,
                'conditions' => $new_data[$key]->conditions,
                'total' => $new_data[$key]->total,
                'next_class' => $new_class[$rotate],
                'name_split' => $new_data[$key]->name_split,
                'created_at' => now(),
            ]);
        }



        foreach ($new_data as $key => $value) {
            if (count($new_data) == $key - 2) {
                break;
            } else {

                $table = 'class' . $new_data[$key]->class . 's';
                $rotate = $key % $_REQUEST['next_class'];
                switch ($table) {
                    case "class1s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;
                    case "class2s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;
                    case "class3s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key, );
                        break;

                    case "class4s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);

                        break;

                    case "class5s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class6s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class7s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class8s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);

                        break;

                    case "class9s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class10s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class11s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class12s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class13s":

                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class14s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class15s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class16s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class17s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class18s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class19s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                    case "class20s":
                        get_next_class($table, $new_class, $new_data, $rotate, $key);
                        break;

                }


            }
        }
        $new_data = array();
        $new_data1 = array();

        //dd($new_data);
        //dd( $new_data1);
        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {
            $new_data[$i] = DB::table('class' . $i . 's')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('class', 'asc')
                ->orderBy('numbers', 'asc')
                ->orderBy('name', 'asc')
                ->get();

            $new_data1 = array_merge($new_data1, $new_data[$i]->toArray());
        }


        return view('step02', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
            'data' => $new_data1,
        ]);
    }

    //엑셀 출력 1, 2
     public function store1(Request $request)
    {
        $new_data = array();
        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {


            $new_data1[$i] = DB::table('class' . $i . 's')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('class', 'asc')
                ->orderBy('numbers', 'asc')

                ->get();
            $new_data = array_merge($new_data, $new_data1[$i]->toArray());

        }


        $cells = array(
            'A' => array(15, 'school_name', '학교명'),
            'B' => array(15, 'grade', '학년'),
            'C' => array(15, 'class', '반'),
            'D' => array(15, 'numbers', '번호'),
            'E' => array(15, 'name', '이름'),
            'F' => array(15, 'sex', '성별'),
            'G' => array(15, 'atitude', '수업태도'),
            'H' => array(15, 'ability', '학습능력'),
            'I' => array(15, 'friendship', '교우관계'),
            'J' => array(15, 'total', '총점'),
            'K' => array(15, 'conditions', '분리배정'),
            'L' => array(15, 'next_class', '반편성결과'),
            'M' => array(15, 'name_split', '중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key . '1';

            $sheet->getColumnDimension($key)->setWidth($val[0]);
            $sheet->getRowDimension('1')->setRowHeight(25);
            $sheet->setCellValue($cellName, $val[2]);
            $sheet->getStyle($cellName)->getFont()->setBold(true);
            $sheet->getStyle($cellName)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle($cellName)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }


        $sheet->getStyle('A1:M1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $sheet->getStyle('A1:M1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:M1')->getFont()->getColor()->setARGB('FFFFFFFF');
        $sheet->getStyle('A1:M1')->getFont()->setBold(true);
        $sheet->getStyle('A1:M1')->getFont()->setSize(12);
        $sheet->getStyle('A1:M1')->getFont()->setName('맑은 고딕');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setShrinkToFit(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setTextRotation(90);
        $sheet->getStyle('A1:M1')->getAlignment()->setIndent(1);
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);



        for ($i = 0; $i < count(($new_data)); $i++) {
            foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
                // dd($new_data[$i]);
                $sheet->setCellValue($key . ($i + 2), $new_data[$i]->$value);
            }

        }
        $filename = '반편성 결과(올해 반 기준)';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');

        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        $writer->save('php://output');
        exit();

        //return view('step02');



        return view('step03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
        ]);
    }

    //
    public function store2(Request $request)
    {

        $new_data = array();

        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {

            $new_data1[$i] = DB::table('class' . $i . 's')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('class', 'asc')
                ->orderBy('numbers', 'asc')
                ->orderBy('next_class', 'asc')
                ->get();

            $new_data = array_merge($new_data, $new_data1[$i]->toArray());


        }

        for ($i = 0; $i < count(($new_data)); $i++) {


            if ($new_data[$i]->next_class == '가') {
                DB::table('nclass1s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '나') {
                DB::table('nclass2s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '다') {
                DB::table('nclass3s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '라') {
                DB::table('nclass4s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '마') {
                DB::table('nclass5s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '바') {
                DB::table('nclass6s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '사') {
                DB::table('nclass7s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '아') {
                DB::table('nclass8s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '자') {
                DB::table('nclass9s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '차') {
                DB::table('nclass10s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '카') {
                DB::table('nclass11s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '타') {
                DB::table('nclass12s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '파') {
                DB::table('nclass13s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } elseif ($new_data[$i]->next_class == '하') {
                DB::table('nclass14s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'A') {
                DB::table('nclass15s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'B') {
                DB::table('nclass16s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'C') {
                DB::table('nclass17s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'D') {
                DB::table('nclass18s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'E') {
                DB::table('nclass19s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else if ($new_data[$i]->next_class == 'F') {
                DB::table('nclass20s')->insert([
                    'school_name' => $new_data[$i]->school_name,
                    'grade' => $new_data[$i]->grade,
                    'class' => $new_data[$i]->class,
                    'numbers' => $new_data[$i]->numbers,
                    'name' => $new_data[$i]->name,
                    'sex' => $new_data[$i]->sex,
                    'atitude' => $new_data[$i]->atitude,
                    'ability' => $new_data[$i]->ability,
                    'friendship' => $new_data[$i]->friendship,
                    'total' => $new_data[$i]->total,
                    'conditions' => $new_data[$i]->conditions,
                    'next_class' => $new_data[$i]->next_class,
                    'name_split' => $new_data[$i]->name_split,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        $new_data = array();

        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {

            $new_data1[$i] = DB::table('nclass' . $i . 's')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->orderBy('new_class', 'asc')
                ->orderBy('sex', 'asc')
                ->orderBy('name', 'asc')
                ->get();

            $new_data = array_merge($new_data, $new_data1[$i]->toArray());


        }




        $cells = array(
            'A' => array(15, 'school_name', '학교명'),
            'B' => array(15, 'grade', '학년'),
            'C' => array(15, 'class', '반'),
            'D' => array(15, 'numbers', '번호'),
            'E' => array(15, 'name', '이름'),
            'F' => array(15, 'sex', '성별'),
            'G' => array(15, 'atitude', '수업태도'),
            'H' => array(15, 'ability', '학습능력'),
            'I' => array(15, 'friendship', '교우관계'),
            'J' => array(15, 'total', '총점'),
            'K' => array(15, 'conditions', '분리배정'),
            'L' => array(15, 'next_class', '반편성결과'),
            'M' => array(15, 'name_split', '중복 이름'),
        );

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key . '1';

            $sheet->getColumnDimension($key)->setWidth($val[0]);
            $sheet->getRowDimension('1')->setRowHeight(25);
            $sheet->setCellValue($cellName, $val[2]);
            $sheet->getStyle($cellName)->getFont()->setBold(true);
            $sheet->getStyle($cellName)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle($cellName)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }


        $sheet->getStyle('A1:M1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $sheet->getStyle('A1:M1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:M1')->getFont()->getColor()->setARGB('FFFFFFFF');
        $sheet->getStyle('A1:M1')->getFont()->setBold(true);
        $sheet->getStyle('A1:M1')->getFont()->setSize(12);
        $sheet->getStyle('A1:M1')->getFont()->setName('맑은 고딕');
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:M1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setShrinkToFit(true);
        $sheet->getStyle('A1:M1')->getAlignment()->setTextRotation(90);
        $sheet->getStyle('A1:M1')->getAlignment()->setIndent(1);
        $sheet->getStyle('A1:M1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);



        for ($i = 0; $i < count(($new_data)); $i++) {
            foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
                // dd($new_data[$i]);
                $sheet->setCellValue($key . ($i + 2), $new_data[$i]->$value);
            }

        }
        $filename = '반배정결과(내년 반 기준)';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');

        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        $writer->save('php://output');
        exit();





        return view('step03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'next_class' => $request->next_class,
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
