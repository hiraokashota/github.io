<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
   {

    $tasks = DB::table('tasks')->get();    
     return view('task', ['tasks' => $tasks]);
   }

   public function store(Request $request)
    {
    //モデルをインスタンス化
    $task = new Task;
    //モデル->カラム名 = 値 で、データを割り当てる
    $task->task_name = $request->input('task_name');
    //データベースに保存
    $task->save();
    //リダイレクト
    return redirect('/tasks');
    }
}
