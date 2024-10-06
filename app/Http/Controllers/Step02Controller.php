<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Step02Controller extends Controller
{
    //
    public function index(Request $request)
    {
        $old_data = array();

        for ($i = 1; $i <= $_REQUEST['next_class']; $i++) {

                $old_data[$i] = DB::table('step01s')
                    ->where('current_class', $i)
                    ->orderBy('numbers', 'asc')
                    ->get();
                $new_data[$i] = DB::table('step01s')
                    ->where('next_class', $i)
                    ->orderBy('next_class', 'asc')
                    ->orderBy('sex', 'desc')
                    ->orderBy('name', 'asc')
                    ->get();

            }
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

        $sheet->getStyle('A1:K1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFA0A0A0');
        $sheet->getStyle('A1:K1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:K1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:K1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:K1')->getFont()->getColor()->setARGB('FFFFFFFF');
        $sheet->getStyle('A1:K1')->getFont()->setBold(true);
        $sheet->getStyle('A1:K1')->getFont()->setSize(12);
        $sheet->getStyle('A1:K1')->getFont()->setName('맑은 고딕');
        $sheet->getStyle('A1:K1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:K1')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A1:K1')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:K1')->getAlignment()->setShrinkToFit(true);
        $sheet->getStyle('A1:K1')->getAlignment()->setTextRotation(90);
        $sheet->getStyle('A1:K1')->getAlignment()->setIndent(1);
        $sheet->getStyle('A1:K1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        $row = 2;
        // foreach ($old_data as $key => $value) {
        //     foreach ($value as $key2 => $value2) {
        //         $sheet->setCellValue('A'.$key2, $value2->school_name);
        //         $sheet->setCellValue('B'.$key2, $value2->grade);
        //         $sheet->setCellValue('C'.$key2, $value2->class);
        //         $sheet->setCellValue('D'.$key2, $value2->numbers);
        //         $sheet->setCellValue('E'.$key2, $value2->name);
        //         $sheet->setCellValue('F'.$key2, $value2->sex);
        //         $sheet->setCellValue('G'.$key2, $value2->atitude);
        //         $sheet->setCellValue('H'.$key2, $value2->ability);
        //         $sheet->setCellValue('I'.$key2, $value2->friendship);
        //         $sheet->setCellValue('J'.$key2, $value2->total);
        //         $sheet->setCellValue('K'.$key2, $value2->next_class);
        //         $row++;
        //     }
        for ($i = 2; $row = array_shift($new_data); $i++) {
	    foreach ($cells as $key => $val) {
	        $sheet->setCellValue($key.$i, $row[$val[1]]);
	    }

	}
        $filename = '반배정결과';

	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');

	$writer = new Xlsx($spreadsheet);
	$writer->save('php://output');


        return view('step02');


    }
}
