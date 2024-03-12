<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('list');

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


}
