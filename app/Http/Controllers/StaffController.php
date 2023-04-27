<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    public static function login(\Request $request)
    {
        // Выборка из запроса
        $credentials = $request->only(['email', 'password']);
        $user = DB::table('Staff')->
            where('Email', '=', $credentials[0])->
            where('Password', '=', $credentials[1])->first();
        if ($user != nullValue())
        {
            app('App\User')->setFIO($user->first('FIO'));

            return redirect('/ActionPage');
        }
        // Если не найден пользователь
        return response()->json([
            'errors' => [
                'email' => ['Invalid email or password.']
            ]
        ], 422);
    }

    public static function allStaff()
    {
        return DB::table('Staff')->get();
    }

    public static function studentsOfGroup(string $name)
    {
        try {
            if (DB::table('Class')->where('Name', 'LIKE', $name)->exists() == null ){
                return null;
            }
            return DB::table('Students')
                ->where('IDClass',
                    '=',
                    DB::table('Class')->where('Name', 'LIKE', $name)->select('ID')->first())
                ->get();
        }
        catch (\Exception $exception){
            return $exception;
        }
    }

}
