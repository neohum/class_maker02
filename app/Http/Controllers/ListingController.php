<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
  //
  public function index()
  {
    return view('index');
  }

  public function store(Request $request)
  {
      $data = DB::table('excel_data')->get();
      
  }
}
