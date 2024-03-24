<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CarCheckModel;
use Illuminate\Support\Facades\Auth;

class CarCheckController extends Controller
{
    function index(){
        $search = '';
        $carcheck = CarCheckModel::search($search);
        return view('carcheck',compact('carcheck','search'));
    }


    function search(Request $request){
        $search = $request->search;
        $carcheck = CarCheckModel::search($search);

        return view('carcheck',compact('carcheck', 'search'));
    }

    function delete($carcheck_id){
        DB::table('carcheck')->where('carcheck_id',$carcheck_id)->delete();
        return redirect('/carcheck');
    }


    function addcarcheck($carR_id){
        $cars = DB::table('carrecive')->where('carR_id',$carR_id)->get();
        return view('addcarcheck', ['cars' => $cars]);

    }
//    function insert(Request $request){

        //dd($request->all());
//        $request->validate(
//            [
//                'carR_id'=>'required',
//                'detail'=>'required|max:50',
//            ],
//            [
//                'carR_id.required'=>'กรุณาเลือกรถ',
//                'detail.required' =>'กรุณาระบุอาการ',
//            ]
//        );
 //       $data = [
 //           'carR_id' => $request->carR_id,
 //           'detail' => $request->detail,
 //           'date' => now(),
 //           'checkcarstatus_id' => 1,
 //           'addBy_id' => 2, 
 //       ];
    
        // บันทึกข้อมูลลงในตาราง carcheck
 //       DB::table('carcheck')->insert($data);
    
        // Redirect ไปยังหน้า carcheck หลังจากบันทึกข้อมูลเสร็จสมบูรณ์
 //       return redirect()->route('carcheck');
  //  }   
  
  function insert(Request $request){
    $request->validate([
        'carR_id'=>'required', // ตรวจสอบว่ามีการเลือกรถ
        'detail'=>'required|max:50',
    ],
    [
        'carR_id.required'=>'กรุณาเลือกรถ',
        'detail.required' =>'กรุณาระบุอาการ',
    ]);

    
        $data = [
            'carR_id' => $request->carR_id,
            'detail' => $request->detail,
            'date' => now(),
            'checkcarstatus_id' => 1,
            'addBy_id' => 2, 
        ];

        // บันทึกข้อมูลลงในตาราง carcheck
        DB::table('carcheck')->insert($data);

        // Redirect ไปยังหน้า carcheck หลังจากบันทึกข้อมูลเสร็จสมบูรณ์
        return redirect()->route('carcheck');
    
}

    //function edit($carcheck_id){
    //    $cars=DB::table('carcheck')->where('carcheck_id',$carcheck_id)->first();
    //    return view('editcarcheck',compact('carcheck_id'));
    //}
    function edit($carcheck_id){
        $cars = DB::table('carcheck')->where('carcheck_id',$carcheck_id)->first();
        return view('editcarcheck',compact('cars'));
    }

    function update(Request $request,$carcheck_id){
        $request->validate(
            [
                'detail'=>'required|max:50',
            ],
            [
                'detail.required' =>'กรุณาระบุอาการ',
            ]
        );        
        $data=[
            'detail'=>$request->detail,
        ];
        DB::table('carcheck')->where('carcheck_id',$carcheck_id)->update($data);
        return redirect('/carcheck');
    }

}
