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
    

    function addcarrecive(){
        $carList = Carrecive::getCarList();
        return view('addcarrecive',compact('carList'));
    }

    function insert(Request $request){
    
    $request->validate([
        'customerName'=>'required',
        'customerLastName'=>'required',
        'customerPhone'=>'required|regex:/^[0-9]+$/|min:10|max:11',
        'car_id'=>'required', // ตรวจสอบว่า 'car_id' มีการส่งมาหรือไม่
    ],[
        'customerName.required' =>'กรุณากรอกชื่อเจ้าของรถ',
        'customerLastName.required' =>'กรุณากรอกนามสกุลเจ้าของรถ',
        'customerPhone.required' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถ',
        'customerPhone.regex' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถเป็นเลขเท่านั้น',
        'customerPhone.min' => 'เบอร์โทรศัพท์เจ้าของรถควรมี 10 ตัวอักษร',
        'customerPhone.max' => 'เบอร์โทรศัพท์เจ้าของรถไม่ควรเกิน 10 ตัวอักษร',
        'car_id.required' =>'กรุณาเลือกทะเบียนรถ', // ข้อความแจ้งเตือนเมื่อ 'car_id' เป็นค่าว่าง
    ]);

    $data=[
        'customerName'=>$request->customerName,
        'customerLastName'=> $request->customerLastName,
        'customerPhone'=>$request->customerPhone,
        'car_id'=>$request->car_id,
        'date'=>now()
    ];

    DB::table('carrecive')->insert($data);

    return redirect('carrecive');
    }   

    function delete($carR_id){
        DB::table('carrecive')->where('carR_id',$carR_id)->delete();
        return redirect('/carrecive');
    }
}
