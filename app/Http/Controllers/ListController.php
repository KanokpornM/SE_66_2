<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListModel;


class ListController extends Controller
{
    function index(){
        $list = ListModel::getAll();
        return view('list',compact('list'));
    }
}
