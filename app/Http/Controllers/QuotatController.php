<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuotatController extends Controller
{
    function index(){
    
        $quotation=DB::table('quotationq')->get();
        return view('quotat',compact('quotation'));
    }
    function addquotat(){
        return view('addquotat');
    }
    function insert(Request $request){
    
        $request->validate([
            'quotation_id'=>'required',
            'carR_id'=>'required',
            'detail'=>'required',
            'status'=>'required',
        ],[
            'quotation_id.required' =>'กรุณากรอกอาการ',
            'carR_id.required' =>'กรุณากรอกรายการอะหล่',
            'detail.required' =>'กรุณากรอกรายละเอียด',
            'status.required' =>'กรุณากรอกจำนวน',
            'date.required' =>'กรุณาเลือกวันที่',
        ]);
    
        $data=[
            'quotation_id'=>$request->quotation_id,
            'carR_id'=> $request->carR_id,
            'detail'=> $request->detail,
            'status'=>$request->status,
            'date'=>now()
        ];
    
        DB::table('quotationq')->insert($data);
    
        return redirect('quotat');
        }  

    function edit($quotation_id){
        $quotation=DB::table('quotationq')->where('quotation_id',$quotation_id)->first();
        return view('editquotat',compact('quotation'));
    }

    function update(Request $request,$quotation_id){
        $request->validate(
            [
                'quotation_id'=>'required',
                'carR_id'=>'required',
                'detail'=>'required',
                'status'=>'required',
            ],
            [
                'quotation_id.required' =>'กรุณากรอกอาการ',
                'carR_id.required' =>'กรุณากรอกรายการอะไหล่',
                'detail.required' =>'กรุณากรอกรายละเอียด',
                'status.required' =>'กรุณากรอกจำนวน',
                'date.required' =>'กรุณาเลือกวันที่',
            ]
        );
        $data=[
            'quotation_id'=>$request->quotation_id,
            'carR_id'=> $request->carR_id,
            'detail'=> $request->detail,
            'status'=>$request->status,
            'date'=>now()
        ];
        DB::table('quotationq')->where('quotation_id',$quotation_id)->update($data);
        return redirect('/quotat');
    }

    function search(Request $request){
        $search = $request->search;
        $quotation = DB::table('quotationq')->where(function($query) use ($search){
            $query->where('quotation_id','like',"%$search%");
        })->get();

        return view('/quotat',compact('quotation','search'));
    }

    function delete($quotation_id){
        DB::table('quotationq')->where('quotation_id',$quotation_id)->delete();
        return redirect('/quotat');
    }
}
