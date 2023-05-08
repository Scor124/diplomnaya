<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function showStudents(\Request $request)
    {
        return \DB::table('users')->get();
    }
    public function getCurrentUser(\Request $request)
    {
        $user = \Auth::user();
        if ($user) {
            return "Пользователь {$user->FIO} авторизован.";
        } else {
            return "Пользователь не авторизован.";
        }
    }
    function index()
    {
        $user = Auth::user(); // получаем текущего пользователя
        if (\DB::table('students')->where('UserID', '=', $user->get('id'))->first()) {
            // если пользователь - ученик, то
            $actions = ['посмотреть оценки', 'посмотреть домашнее задание'];
            $users = Teachers::all();
        } elseif (\DB::table('teachers')->where('UserID', '=', $user->get('id'))->first()) {
            // если пользователь - учитель, то
            $actions = ['поставить оценку', 'назначить домашнее задание'];
            $users = Students::all();
        } else {
            // если пользователь не учитель и не ученик, то редиректим на страницу авторизации
            return redirect('login');
        }
        return view('dashboard', compact('actions', 'users'));
    }
}
