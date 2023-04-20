<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public static function allStaff()
    {
        return DB::table('Staff')->get();
    }
    public function allTeachers()
    {

    }
}
