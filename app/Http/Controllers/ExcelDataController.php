<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelDataController extends Controller
{
public function index(Request $request)
    {

        return view('excel_data');
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
            ]);

            }

        }

        DB::commit();

        DB::commit();

        return response()->json(['success' => 'File uploaded and data imported successfully!']);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
}
}
}

