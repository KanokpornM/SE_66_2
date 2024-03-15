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
        'customerPhone'=>'required|max:10',
        'car_id'=>'required|max:7', // ตรวจสอบว่า 'car_id' มีการส่งมาหรือไม่
        'receiveDate'=>'date',
    ],[
        'customerName.required' =>'กรุณากรอกชื่อเจ้าของรถ',
        'customerLastName.required' =>'กรุณากรอกนามสกุลเจ้าของรถ',
        'customerPhone.required' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถ',
        'customerPhone.max' => 'เบอร์โทรศัพท์เจ้าของรถไม่ควรเกิน 7 ตัวอักษร',
        'car_id.required' =>'กรุณาเลือกทะเบียนรถ', // ข้อความแจ้งเตือนเมื่อ 'car_id' เป็นค่าว่าง
        'car_id.max' => 'ทะเบียนรถไม่ควรเกิน 7 ตัวอักษร',
        'receiveDate' =>'กรุณากรอกวันที่',
    ]);

    // ตรวจสอบว่า 'car_id' ไม่ใช่ค่าว่าง (NULL) ก่อนที่จะบันทึกข้อมูล
    if($request->has('car_id')) {
        $car_id = $request->car_id;
    } else {
        return back()->with('error', 'กรุณาเลือกทะเบียนรถ');
        // แสดงข้อความแจ้งเตือนหรือทำการ redirect กลับไปยังหน้าแรกหรือหน้าที่เหมาะสม
    }

    $carrecive = new Carrecive;
    $carrecive->customerName = $request->customerName;
    $carrecive->customerLastName = $request->customerLastName;
    $carrecive->customerNumber = $request->customerPhone;
    $carrecive->car_id = $car_id; // กำหนดค่า 'car_id' ที่ตรวจสอบแล้ว
    $carrecive->date = $request->receiveDate;
    $carrecive->save();

    return redirect('/carrecive');
    }   
}
