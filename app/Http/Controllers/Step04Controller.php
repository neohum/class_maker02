<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step01;
use App\Models\ExcelData;
use App\Models\SchoolInfo;

class Step04Controller extends Controller
{
    //
    public function index(Request $request)
    {
        return view('step04');
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
            return redirect()->route('index');
        }

        try {

        $excel_datas = ExcelData::where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($excel_datas as $data) {
                $data->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('index');
        }
        try {

        $school_info = SchoolInfo::where('school_name', $_REQUEST['school_name'])
                ->where('current_grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($school_info as $info) {
                $info->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('index');
        }

        return redirect()->route('index');
    }
}
