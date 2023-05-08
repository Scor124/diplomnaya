<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function (){
    Route::get('/students',[\App\Http\Controllers\Controller::class,'showStudents'])->name('students');
    Route::get('/{table}/list',function (string $table){
        return DB::table($table)->get();
    });
    Route::get('/{table}/{id}',function (string $table, string $id){
        return DB::table($table)->where('id', '=',$id)->get();
    });
    Route::post('',function (){
        return;
    });
    Route::delete('',function (){
        return;
    });
});
