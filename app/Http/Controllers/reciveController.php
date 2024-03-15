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
    function edit($carcheck_id){
        $carcheck=DB::table('carcheck')->where('carcheck_id',$carcheck_id)->first();
        return view('editrecive',compact('carcheck'));
    }

    function addrecive(){
        $data1=DB::table('carrecive')->get();
        $data2=DB::table('addby')->get();
        $data3=DB::table('carcheckstatus')->get();
        return view('addrecive',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

    function insert(Request $request){
        $request->validate(
            [
                'detail'=>'required|max:50',
            ],
            [
                'detail.required' =>'กรุณาระบุอาการ',
            ]
        );
        $data = [
            'carR_ID' => $request->car_id,
            'detail' => $request->detail,
            'date' => now(),
            'checkcarstatus_id' => $request->checkcarstatus_id,
            'addBy_id' => 1, 
        ];
    
        // บันทึกข้อมูลลงในตาราง carcheck
        DB::table('carcheck')->insert($data);
    
        // Redirect ไปยังหน้า carcheck หลังจากบันทึกข้อมูลเสร็จสมบูรณ์
        return redirect()->route('recive');
    } 

 }
