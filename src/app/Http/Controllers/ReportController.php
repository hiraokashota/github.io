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
    $report->alc_name2 = $request->input('alc_name2');
    $report->count2 = $request->input('count2');
    $report->abv2 = $request->input('abv2');
    $report->capacity2 = $request->input('capacity2');
    $report->alc_name3 = $request->input('alc_name3');
    $report->count3 = $request->input('count3');
    $report->abv3 = $request->input('abv3');
    $report->capacity3 = $request->input('capacity3');
    $report->alc_name4 = $request->input('alc_name4');
    $report->count4 = $request->input('count4');
    $report->abv4 = $request->input('abv4');
    $report->capacity4 = $request->input('capacity4');

    // //アルコール量の式
    // int category1 =  capacity1 * (100 % abv1) * 0.8; //酒名1のアルコール量
    // int category2 =  capacity2 * (100 % abv2) * 0.8; //酒名2のアルコール量
    // int category3 =  capacity3 * (100 % abv3) * 0.8; //酒名3のアルコール量
    // int category4 =  capacity4 * (100 % abv4) * 0.8; //酒名4のアルコール量
    // //総アルコール量
    // result_value = category1 + category2 + category3 + category4;

    //これだと更新ではなくてデータの追加になる。
    $report -> save();

    //データベースに更新
    // $report->update(
    //   Report::where('goal_value', '!=', 'null')->update([
    //     'goal_value' => input('goal_value'),
    //     'result_value' => input('result_value'),
    //     'memo' => input('memo'),
    //     'alc_name1' => input('alc_name1'),
    //     'count1' => input('count1'),
    //     'abv1' => input('abv1'),
    //     'capacity1' => input('capacity1'),
    //     'alc_name2' => input('alc_name2'),
    //     'count2' => input('count2'),
    //     'abv2' => input('abv2'),
    //     'capacity2' => input('capacity2'),
    //     'alc_name3' => input('alc_name3'),
    //     'count3' => input('count3'),
    //     'abv3' => input('abv3'),
    //     'capacity3' => input('capacity3'),
    //     'alc_name4' => input('alc_name4'),
    //     'count4' => input('count4'),
    //     'abv4' => input('abv4'),
    //     'capacity4' => input('capacity4'),
    //   ]);
    // );

    //リダイレクト
    return redirect('/');
  }
}
