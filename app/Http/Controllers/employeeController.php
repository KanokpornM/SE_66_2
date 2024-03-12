<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    function index(){
        $emp = DB::table('employs')->get();
        return view('employee',compact('emp'));
    }
}
