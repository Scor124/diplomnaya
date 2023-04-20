<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function allStaff()
    {
        return DB::table('Staff')->get();
    }
    public function allTeachers()
    {

    }
}
