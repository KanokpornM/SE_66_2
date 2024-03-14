<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){
        return view('welcome');

    }

    function car(){
        return view('car');

    }

    function carrecive(){

        return view('carrecive');
    }

    function carcheck(){
        return view('carcheck');

    }

    function recive(){
        return view('recive');
    }

    function list(){
        $list = DB::table('list')->get();
        
        return view('list',compact('list'));

    }

    function employee(){
        return view('employee');

    }

    function partlist(){
        return view('partlist');

    }

    function quotation(){
        return view('quotation');

    }

    function receipt(){
        return view('receipt');

    }

    function addcar(){
        return view('addcar');

    }

    function addcarcheck(){
        return view('addcarcheck');

    }

    function addcarrecive(){
        return view('addcarrecive');

    }


}
