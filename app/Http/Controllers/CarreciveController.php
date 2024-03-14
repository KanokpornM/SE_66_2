<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carrecive;

class CarreciveController extends Controller
{
    function carrecive(){
        $search = '';
        $carrecive = Carrecive::getAll();
        return view('carrecive',compact('carrecive','search'));
    }
    
    function search(Request $request){
        
        $search = $request->search;
        if($search != ''){
        $carrecive = Carrecive::search($search);
        }else{
            $carrecive = Carrecive::getAll();
        }
        return view('carrecive',compact('carrecive','search'));
    }
}
