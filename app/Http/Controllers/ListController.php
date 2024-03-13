<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListModel;


class ListController extends Controller
{
    function index(){
        $search = '';
        $list = ListModel::search('');
        return view('list',compact('list','search'));
    }
    function search(Request $request){
        $search = $request->search;
        $list = ListModel::search($search);

        return view('list',compact('list', 'search'));
    }
    
}
