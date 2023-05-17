<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
  //DB接続
    public function index($id)
  {
    $reports = Report::find($id);
    return view('report', ['reports' => $reports]);
  }
}
