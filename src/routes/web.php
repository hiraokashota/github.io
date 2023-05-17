<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('tasks', TaskController::class);
//Route::get('task','App\Http\Controllers\TaskController@index');//タスク画面
Route::post('tasks/create',[TaskController::class,'store']);//タスク追加
Route::post('tasks/edit',[TaskController::class,'edit']);//タスク編集
Route::post('tasks/delete',[TaskController::class,'delete']);//タスク削除
Route::post('tasks/report',[ReportController::class,'index']);//レポート画面

//Route::get('report','App\Http\Controllers\ReportController@index');
