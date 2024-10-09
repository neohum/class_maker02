<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Step02Controller extends Controller
{
    //
    public function store1(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('step01s')
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
            'K' => array(15, 'next_class','반편성결과'),
            'L' => array(15, 'name_split','중복 이름'),
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


        $sheet->getStyle('A1:L1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $sheet->getStyle('A1:L1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:L1')->getFont()->getColor()->setARGB('FFFFFFFF');
        $sheet->getStyle('A1:L1')->getFont()->setBold(true);
        $sheet->getStyle('A1:L1')->getFont()->setSize(12);
        $sheet->getStyle('A1:L1')->getFont()->setName('맑은 고딕');
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setShrinkToFit(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setTextRotation(90);
        $sheet->getStyle('A1:L1')->getAlignment()->setIndent(1);
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);



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
  }

  //
    public function store2(Request $request)
    {

        $new_data = array();


        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {





                $new_data = DB::table('step01s')
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
            'K' => array(15, 'next_class','반편성결과'),
            'L' => array(15, 'name_split','중복 이름'),
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


        $sheet->getStyle('A1:L1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $sheet->getStyle('A1:L1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:L1')->getFont()->getColor()->setARGB('FFFFFFFF');
        $sheet->getStyle('A1:L1')->getFont()->setBold(true);
        $sheet->getStyle('A1:L1')->getFont()->setSize(12);
        $sheet->getStyle('A1:L1')->getFont()->setName('맑은 고딕');
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:L1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setShrinkToFit(true);
        $sheet->getStyle('A1:L1')->getAlignment()->setTextRotation(90);
        $sheet->getStyle('A1:L1')->getAlignment()->setIndent(1);
        $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);



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

        //return view('step02');


    }
  }
}
