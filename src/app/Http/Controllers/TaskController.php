<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class TaskController extends Controller
{
  //DB接続
    public function index(Request $request)
   {
    $tasks = DB::table('tasks')->get();    
     return view('task', ['tasks' => $tasks]);
   }

   //タスク追加機能
   public function store(Request $request)
    {
      //文字数制限の表示
      $rules = [
        'task_name' => 'required|max:8',
      ];
    
      $messages = ['required' => '必須項目です', 'max' => '8文字以下にしてください。'];
    
      Validator::make($request->all(), $rules, $messages)->validate();
    
    //モデルをインスタンス化
    $task = new Task;
    //モデル->カラム名 = 値 で、データを割り当てる
    $task->task_name = $request->input('task_name');
    //データベースに保存
    $task->save();
    dd('aaaaaaa');
    //リダイレクト
    return redirect('/tasks');
    }

    //タスク名編集
    public function edit($id)
  {
    $task = Task::find($id);
    return view('edit', compact('task'));
  }

    //タスク名アップデート
  public function update(Request $request, $id)
  {
    dd($request->status);
    //編集を行ったとき
    //ステータスはnullになる
    if($request->status === null){
      $rules = [
        'task_name' => 'required|max:8',
      ];
    
      $messages = ['required' => '必須項目です', 'max' => '8文字(年月日)にしてください。'];
      Validator::make($request->all(), $rules, $messages)->validate();
      //該当のタスクを検索
      $task = Task::find($id);
      //モデル->カラム名 = 値 で、データを割り当てる
      $task->task_name = $request->input('task_name');
      $task->
      //データベースに保存
      $task->save();  
    }else{
     //「完了」ボタンを押したとき
      //該当のタスクを検索
      $task = Task::find($id);
      //モデル->カラム名 = 値 で、データを割り当てる
      $task->status = true; //true:完了、false:未完了
      //データベースに保存
      $task->save();
    }
    //リダイレクト
    return redirect('/tasks');
  }

  //タスク削除
  public function destroy($id)
  {
    //削除対象レコードを検索
    $task = Task::find($id);
    //削除
    $task ->delete();
    //リダイレクト
    return redirect('/tasks');
  }
  //Task一覧の返却(論理削除)
  // public function getTask()
  // {
  // $users = DB::table($this->table)
  //   ->whereNull('deleted_flg')
  //   ->get();
  // return $users;
  // }

}
