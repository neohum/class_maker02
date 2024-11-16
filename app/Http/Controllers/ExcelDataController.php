<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExcelData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\SchoolInfo;
use App\Models\Step01;
use App\Models\Class0;
use App\Models\Class1;
use App\Models\Class2;
use App\Models\Class3;
use App\Models\Class4;
use App\Models\Class5;
use App\Models\Class6;
use App\Models\Class7;
use App\Models\Class8;
use App\Models\Class9;
use App\Models\Class10;
use App\Models\Class11;
use App\Models\Class12;
use App\Models\Class13;
use App\Models\Class14;
use App\Models\Class15;
use App\Models\Class16;
use App\Models\Class17;
use App\Models\Class18;
use App\Models\Class19;
use App\Models\Class20;
use App\Models\Nclass1;
use App\Models\Nclass2;
use App\Models\Nclass3;
use App\Models\Nclass4;
use App\Models\Nclass5;
use App\Models\Nclass6;
use App\Models\Nclass7;
use App\Models\Nclass8;
use App\Models\Nclass9;
use App\Models\Nclass10;
use App\Models\Nclass11;
use App\Models\Nclass12;
use App\Models\Nclass13;
use App\Models\Nclass14;
use App\Models\Nclass15;
use App\Models\Nclass16;
use App\Models\Nclass17;
use App\Models\Nclass18;
use App\Models\Nclass19;
use App\Models\Nclass20;




class ExcelDataController extends Controller
{
public function index(Request $request)
    {
        if (DB::table('excel_data')->where('school_name', $_REQUEST['school_name'])->exists()) {
            return view('excel_data', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        } else {
            return view('excel_data', ['schoolinfo' => 'false', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
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
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'],'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

            $excel_datas = ExcelData::where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($excel_datas as $data) {
                $data->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

            $excel_datas = Step01::where('school_name', $_REQUEST['school_name'])
                ->where('grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($excel_datas as $data) {
                $data->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

            $school_info = SchoolInfo::where('school_name', $_REQUEST['school_name'])
                ->where('current_grade', $_REQUEST['current_grade'])
                ->get();
            foreach ($school_info as $info) {
                $info->delete();
            }
        } catch (\Exception $e) {
            return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class1s = Class1::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class1s as $class1) {
                    $class1->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class2s = Class2::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class2s as $class2) {
                    $class2->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class3s = Class3::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class3s as $class3) {
                    $class3->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class4s = Class4::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class4s as $class4) {
                    $class4->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class5s = Class5::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class5s as $class5) {
                    $class5->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class6s = Class6::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class6s as $class6) {
                    $class6->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class7s = Class7::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class7s as $class7) {
                    $class7->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class8s = Class8::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class8s as $class8) {
                    $class8->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class9s = Class9::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class9s as $class9) {
                    $class9->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class10s = Class10::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class10s as $class10) {
                    $class10->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class11s = Class11::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class11s as $class11) {
                    $class11->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class12s = Class12::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class12s as $class12) {
                    $class12->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class13s = Class13::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class13s as $class13) {
                    $class13->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class14s = Class14::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class14s as $class14) {
                    $class14->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class15s = Class15::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class15s as $class15) {
                    $class15->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class16s = Class16::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class16s as $class16) {
                    $class16->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class17s = Class17::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class17s as $class17) {
                    $class17->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class18s = Class18::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class18s as $class18) {
                    $class18->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class19s = Class19::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class19s as $class19) {
                    $class19->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }
        try {

                $class20s = Class20::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($class20s as $class20) {
                    $class20->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass1s = Nclass1::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass1s as $nclass1) {
                    $nclass1->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass2s = Nclass2::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass2s as $nclass2) {
                    $nclass2->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass3s = Nclass3::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass3s as $nclass3) {
                    $nclass3->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass4s = Nclass4::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass4s as $nclass4) {
                    $nclass4->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass5s = Nclass5::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass5s as $nclass5) {
                    $nclass5->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass6s = Nclass6::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass6s as $nclass6) {
                    $nclass6->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass7s = Nclass7::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass7s as $nclass7) {
                    $nclass7->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass8s = Nclass8::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass8s as $nclass8) {
                    $nclass8->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass9s = Nclass9::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass9s as $nclass9) {
                    $nclass9->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass10s = Nclass10::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass10s as $nclass10) {
                    $nclass10->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass11s = Nclass11::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass11s as $nclass11) {
                    $nclass11->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass12s = Nclass12::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass12s as $nclass12) {
                    $nclass12->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass13s = Nclass13::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass13s as $nclass13) {
                    $nclass13->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass14s = Nclass14::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass14s as $nclass14) {
                    $nclass14->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass15s = Nclass15::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass15s as $nclass15) {
                    $nclass15->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass16s = Nclass16::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass16s as $nclass16) {
                    $nclass16->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass17s = Nclass17::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass17s as $nclass17) {
                    $nclass17->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass18s = Nclass18::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass18s as $nclass18) {
                    $nclass18->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass19s = Nclass19::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass19s as $nclass19) {
                    $nclass19->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
        }

        try {

                $nclass20s = Nclass20::where('school_name', $_REQUEST['school_name'])
                    ->where('grade', $_REQUEST['current_grade'])
                    ->get();
                foreach ($nclass20s as $nclass20) {
                    $nclass20->delete();
                }
            } catch (\Exception $e) {
                return redirect()->route('excel.index', ['schoolinfo' => 'true', 'school_name' => $_REQUEST['school_name'], 'current_grade' => $_REQUEST['current_grade'], 'current_class' => $_REQUEST['current_class'], 'next_grade' => $_REQUEST['next_grade'], 'next_class' => $_REQUEST['next_class']]);
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
                'conditions' => $row[8],
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

