<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolInfo;

class SchoolInfoController extends Controller
{
    public function index()
    {
        return view('start');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'current_grade' => 'required|integer',
            'current_class' => 'required|integer',
            'next_grade' => 'required|integer',
            'next_class' => 'required|integer',
        ]);

        SchoolInfo::create([
            'school_name' => $request->school_name,
            'current_grade' => $request->current_grade,
            'current_class' => $request->current_class,
            'next_grade' => $request->next_grade,
            'next_class' => $request->next_class,
        ]);

        return redirect()->route('excel.create', ['school_name' => $request->school_name, 'current_grade' => $request->current_grade, 'current_class' => $request->current_class, 'next_grade' => $request->next_grade, 'next_class' => $request->next_class]);
    }
}
