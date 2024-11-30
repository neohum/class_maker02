<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class Step03Controller extends Controller
{
    public function index(Request $request)
    {
        $new_class = ['가', '나', '다', '라', '마', '바', '사', '아', '자', '차', '카', '타', '파', '하', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        $new_data = [];
        $new_data = DB::table('step01s')
                ->where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();

        $counter = 0;



        foreach ($new_data as $key => $value) {
            if (count($new_data) == $key-2) {
                break;
            }else {

            $table = 'class'.$new_data[$key]->class.'s';
            $rotate = $key % $_REQUEST['next_class'];
            switch ($table) {
                case "class1s":

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
                    break;
                case "class2s":

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
                    break;
                case "class3s":

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
                    break;

                case "class4s":

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
                    break;

                case "class5s":

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
                    break;

                case "class6s":

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
                    break;

                case "class7s":

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
                    break;

                case "class8s":

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
                    break;

                case "class9s":

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
                    break;

                case "class10s":

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
                    break;

                case "class11s":

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
                    break;

                case "class12s":

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
                    break;

                case "class13s":

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
                    break;

                case "class14s":
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
                    break;

                case "class15s":
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
                    break;

                case "class16s":
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
                    break;

                case "class17s":
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
                    break;

                case "class18s":
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
                    break;

                case "class19s":
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
                    break;

                case "class20s":
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
                    break;

            }


        }
        }


        return view('step03', [
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
            'data' => $new_data,
        ]);
    }

    public function store1(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class1s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('next_class', 'asc')
                    ->orderBy('sex', 'desc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	        }

    }
        $filename = '반배정결과(내년반 기준)';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();

        //return view('step02');


    }
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





                $new_data = DB::table('class2s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store3(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class3s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store4(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class4s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store5(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class5s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store6(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class6s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store7(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class7s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
   public function store8(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('class8s')
                    ->where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->orderBy('class', 'asc')
                    ->orderBy('numbers', 'asc')
                    ->orderBy('name', 'asc')
                    ->get();



            $cells = array(
            'A' => array(15, 'school_name','학교명'),
            'B' => array(15, 'grade','학년'),
            'C' => array(15, 'class','반'),
            'D' => array(15, 'numbers','번호'),
            'E' => array(15, 'name','이름'),
            'F' => array(15, 'sex','성별'),
            'G' => array(15, 'atitude','수업태도'),
            'H' => array(15, 'ability','학습능력'),
            'I' => array(15, 'friendship','교우관계'),
            'J' => array(15, 'total','총점'),
            'K' => array(15, 'conditions','분리배정'),
            'L' => array(15, 'next_class','반편성결과'),
            'M' => array(15, 'name_split','중복 이름'),
        );
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $key => $val) {
            $cellName = $key.'1';

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



        for ($i = 0; $i<count(($new_data)); $i++) {
	    foreach ($cells as $key => $val) {
                $value = str_replace('"', '', $val[1]);
            // dd($new_data[$i]);
	        $sheet->setCellValue($key.($i+2), $new_data[$i]->$value);
	    }

	}
        $filename = '반배정결과(현재반 기준';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
    ob_end_clean();
	$writer->save('php://output');
        exit();




    }
    return view('step03', [
        'school_name' => $request->school_name,
        'current_grade' => $request->current_grade,
        'next_class' => $request->next_class,
    ]);
  }
}
