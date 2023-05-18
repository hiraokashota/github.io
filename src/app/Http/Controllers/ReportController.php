<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
  
    public function index(Request $request)
  {
    $reports = Report::all();
    return view('report',['reports' => $reports]);
  }
    public function store(Request $request)
  {
    //モデルをインスタンス化
    $report = new Report;
    //データの割り当て
    $report->goal_value = $request->input('goal_value');
    $report->result_value = $request->input('result_value');
    $report->memo = $request->input('memo');
    $report->alc_name1 = $request->input('alc_name1');
    $report->count1 = $request->input('count1');
    $report->abv1 = $request->input('abv1');
    $report->capacity1 = $request->input('capacity1');
    //データベースに保存
    $report->save();
    return redirect('/');
  }
}
