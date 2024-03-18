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

    function delete($emp_id){
        DB::table('employs')->where('emp_id',$emp_id)->delete();
        return redirect('employee');
    }
    function insert(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'po_id'=>'required',
                'lastname'=>'required',
                'po_id'=>'required',
                'phone'=>'required|max:10'
            ],[
                'name.required'=>'กรุณากรอกชื่อ',
                'po_id.required'=>'กรุณาเลือกตำแหน่ง',
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
        DB::table('employs')->insert($data);
        return redirect('/employee');
    }

    function update(Request $request,$emp_id){
        $request->validate(
            [
                'name'=>'required',
                'po_id'=>'required',
                'lastname'=>'required',
                'po_id'=>'required',
                'phone'=>'required|max:10'
            ],[
                'name.required'=>'กรุณากรอกชื่อ',
                'po_id.required'=>'กรุณาเลือกตำแหน่ง',
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
        DB::table('employs')->where('emp_id',$emp_id)->update($data);
        return redirect('/employee');
    }

    function getposition(){
        $po = DB::table('positions')->get();
        return view('addemployee',compact('po'));
    }

    function edit($emp_id){
        $po = DB::table('positions')->get();
        $emp=DB::table('emp')->where('id',$emp_id)->first();
        return view('editemp',compact('emp','po'));
    }

    function search(Request $request){
        $search = $request->search;

        $emp = DB::table('emp')->where(function($query) use ($search){
            $query->where('name','like',"%$search%");
        })->get();

        return view('/employee',compact('emp','search'));
    }
}
