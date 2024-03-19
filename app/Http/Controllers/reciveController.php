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
        $data=DB::table('carcheckstatus')->get();
        return view('editrecive',['carcheck'=>$carcheck,'data'=>$data]);
    }

    function addrecive(){
        $cars = DB::table('carrecive')->get();
        return view('addrecive', ['cars' => $cars]);
    }

    function insert(Request $request){
        $request->validate([
            'detail'=>'required|max:50',
        ], [
            'detail.required' =>'กรุณาระบุอาการ',
        ]);
    
        $data = [
            'carR_ID' => $request->car_id,
            'detail' => $request->detail,
            'date' => now(),
            'checkcarstatus_id' => 1,
            'addBy_id' => 1
        ];
    
        // บันทึกข้อมูลลงในตาราง carcheck
        DB::table('carcheck')->insert($data);
    
        // Redirect ไปยังหน้า carcheck หลังจากบันทึกข้อมูลเสร็จสมบูรณ์
        return redirect()->route('recive');
    }
    

    function update(Request $request,$carcheck_id){ //ยังทำไม่ได้
        // ตรวจสอบว่ามีค่าสำหรับ 'checkcarstatus_id' ที่ถูกส่งมาจากฟอร์มหรือไม่
        if ($request->has('checkcarstatus_id')) {
            $checkcarstatus_id = $request->checkcarstatus_id;
        } else {
            // หากไม่มีค่าสำหรับ 'checkcarstatus_id' กำหนดค่าเริ่มต้นหรือทำการแจ้งเตือนผู้ใช้
            // เช่น กำหนดค่าเริ่มต้นเป็น 1
            $checkcarstatus_id = 1;

            // หรือทำการแจ้งเตือนผู้ใช้ให้กรอกข้อมูลให้ครบถ้วนก่อนทำการบันทึกข้อมูล
            // โดยใช้ Session::flash() หรือตัวอื่น ๆ ตามความเหมาะสม
        }

        $data = [
            'carR_ID' => $request->car_id,
            'detail' => $request->detail,
            'date' => now(),
            'checkcarstatus_id' => $request->carcheckstatus_id, // เปลี่ยนชื่อฟิลด์จาก 'checkcarstatus_id' เป็น 'carcheckstatus_id'
            'addBy_id' => $request->addBy_id ?? 1,
            ];
        DB::table('carcheck')->where('carcheck_id',$carcheck_id)->update($data);
        return redirect('/carcheck');
    }


 }
