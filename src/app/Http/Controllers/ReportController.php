<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
  
    public function report($id)
  {
    //特定のidのデータを取得
    if(isset($id)){
      $reports = Report::find($id);
    } else {
      //$reports = DB::select('select * from reports');
    }
    
    return view('report',['reports' => $reports]);
  }
    public function update(Request $request)
  {
    //モデルをインスタンス化
    $report = new Report; 


    // アルコール量の式
    // int category1 =  capacity1 * (100 % abv1) * 0.8; //酒名1のアルコール量
    // int category2 =  capacity2 * (100 % abv2) * 0.8; //酒名2のアルコール量
    // int category3 =  capacity3 * (100 % abv3) * 0.8; //酒名3のアルコール量
    // int category4 =  capacity4 * (100 % abv4) * 0.8; //酒名4のアルコール量
    // 総アルコール量
    // result_value = category1 + category2 + category3 + category4;

    //これだと更新ではなくてデータの追加になる。
    //$report -> save();
  
    //データベースに更新
    $report->update([
      'goal_value' => $request->input('goal_value'),
      'result_value' =>$request->input('result_value'),
      'memo' => $request->input('memo'),
      'alc_name1' => $request->input('alc_name1'),
      'count1' => $request->input('count1'),
      'abv1' => $request->input('abv1'),
      'capacity1' => $request->input('capacity1'),
      'alc_name2' => $request->input('alc_name2'),
      'count2' => $request->input('count2'),
      'abv2' => $request->input('abv2'),
      'capacity2' => $request->input('capacity2'),
      'alc_name3' => $request->input('alc_name3'),
      'count3' => $request->input('count3'),
      'abv3' => $request->input('abv3'),
      'capacity3' => $request->input('capacity3'),
      'alc_name4' => $request->input('alc_name4'),
      'count4' => $request->input('count4'),
      'abv4' => $request->input('abv4'),
      'capacity4' => $request->input('capacity4'),
    ]);

    $report -> save();

    //リダイレクト
    return redirect('/');
  }
}
