<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Models\recive;

class reciveController extends Controller
{
    function index(){
        $recives=DB::table('view2')
        ->select('carcheck_id','อาการ', 'เพิ่มโดย','สถานะ')
        ->get();
        return view('recive',compact('recives'));
    }

    function index2(){
        $recives=DB::table('carcheck')
        ->join('addby','addby.addBy_id','=','carcheck.addBy_id')
        ->join('carcheckstatus','carcheckstatus.carcheckstatus_id','=','carcheck.checkcarstatus_id')
        ->select('carcheck.carcheck_id','carcheck.detail', 'addby.name','carcheckstatus.name as name2')
        ->get();
        return view('recive',compact('recives'));
    }
    function edit($carcheck_id){
        $carcheck=DB::table('carcheck')->where('carcheck_id',$carcheck_id)->first();
        return view('editrecive',compact('carcheck'));
    }

    function addrecive(){
        $data1=DB::table('carcheck')->get();
        $data2=DB::table('addby')->get();
        $data3=DB::table('carcheckstatus')->get();
        return view('addrecive',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

    function update(Request $request,$carcheck_id){
        $request->validate(
            [
            'carR_id'=>'required'
            ],
            [
                'carR_id.required'=>'แก้ไขสถานะ โดย 1-พัง และ 2-ไม่พัง'
            ]
        );
        $data=[
            'checkcarstatus_id'=>$request->checkcarstatus_id
        ];
        DB::table('carcheck')->where('carcheck_id',$carcheck_id)->update($data);
        return redirect('/recive');
    }
}
