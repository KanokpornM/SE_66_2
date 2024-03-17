<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    function index(){
        $emp = DB::table('emp')->get();
        return view('employee',compact('emp'));
    }

    function delete($id){
        DB::table('employs')->where('emp_id',$id)->delete();
        return redirect('employee');
    }
    function insert(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'lastname'=>'required',
                'po_id'=>'required',
                'phone'=>'required|max:10'
            ],[
                'name.required'=>'กรุณากรอกชื่อ',
                'lastname.required'=>'กรุณากรอกนามสกุล',
                'po_id.required'=>'กรุณาเลือกตำแหน่ง',
                'phone.required'=>'กรุณากรอกเบอร์ติดต่อ',
                'phone.max'=>'เบอร์ติดต่อไม่ควรเกิน 10 ตัว',
                ]
        );
        $data=[
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'po_id'=>$request->po_id,
            'phone'=>$request->phone
        ];
        dd($data);
    }
    function getposition(){
        $po = DB::table('positions')->get();
        return view('addemployee',compact('po'));
    }

}
