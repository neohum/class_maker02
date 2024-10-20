<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\SchoolInfo;
use App\Models\Step01;


class ExcelDataController extends Controller
{
public function index(Request $request)
    {
        if (DB::table('excel_data')->where('school_name', $_REQUEST['school_name'])->exists()) {
            return view('excel_data', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade']]);
        } else {
            return view('excel_data', ['schoolinfo' => 'false', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade']]);
        }
    }

    public function delete(Request $request)
    {
        try {

            $step01s = Step01::where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($step01s as $step01) {
                $step01->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

            $excel_datas = ExcelData::where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($excel_datas as $data) {
                $data->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade']]);
        }
        try {

            $school_info = SchoolInfo::where('school_name', $_REQUEST['school_name'])
                ->where('current_grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($school_info as $info) {
                $info->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        return redirect()->away('http://neohum776.cafe24.com/class_maker02/public/');
    }


    public function store(Request $request)
{
    DB::beginTransaction();



    try {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);

        $file = $request->file('file');
        $filePath = $file->getRealPath();

        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach ($rows as $row) {

            // 디버깅을 위해 각 행의 데이터를 로그에 출력
            Log::info('Row data: ', $row);
            if ($row[0]==='학년') {
                continue;
            }
            if ($row[0] !== null) {
                  ExcelData::create([
                'school_name' => $_REQUEST['school_name'],
                'grade' => $row[0],
                'class' => $row[1],
                'numbers' => $row[2],
                'name' => $row[3],
                'sex' => $row[4],
                'atitude' => $row[5],
                'ability' => $row[6],
                'friendship' => $row[7],
                'total' => $row[5] + $row[6] + $row[7],
                'next_class' => 0,
                'name_split' => mb_substr($row[3], -2, 2),
            ]);

            }

        }

        DB::commit();


        return response()->json(['success' => 'File uploaded and data imported successfully!']);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
}
}
}

