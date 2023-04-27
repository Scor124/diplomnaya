<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

/**
 * @return Collection
 */

Route::get('/Class/{id}', function ($id)
{
    $ns = DB::table('Class')->where('ID',$id)->first('Name')->get();
    return \App\Http\Controllers\StaffController::studentsOfGroup($ns);
});

Route::get('/login', function (){
    return view('welcome');
});
Route::post('/login', [\App\Http\Controllers\StaffController::class, 'login']);

Route::get('/ActionsPage', function () {
    return view('ActionsPage');
});
