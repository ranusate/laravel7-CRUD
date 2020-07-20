<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table('edulevels')->get();
        return view('edulevels/index', ['users' => $users]);
    }
}
