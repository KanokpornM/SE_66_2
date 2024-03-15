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
    
    /*function search(Request $request){
        
        $search = $request->search;
        if($search != ''){
        $carrecive = Carrecive::search($search);
        }else{
            $carrecive = Carrecive::getAll();
        }
        return view('carrecive',compact('carrecive','search'));
    }*/

    function addcarrecive(){
        $carList = Carrecive::getCarList();
        return view('addcarrecive',compact('carList'));
    }

    function insert(Request $request){

        $request->validate(
            [
                'customerName'=>'required',
                'customerLastName'=>'required',
                'customerNumber'=>'required|max:10',
                'car_id'=>'required|max:7',
                'date'=>'date',
            ],
            [
                'customerName.required' =>'กรุณากรอกชื่อเจ้าของรถ',
                'customerLastName.required' =>'กรุณากรอกนามสกุลเจ้าของรถ',
                'customerNumber.required' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถ',
                'customerNumber.max' => 'เบอร์โทรศัพท์เจ้าของรถไม่ควรเกิน 7 ตัวอักษร',
                'car_id.required' =>'กรุณากรอกทะเบียนรถ',
                'car_id.max' => 'ทะเบียนรถไม่ควรเกิน 7 ตัวอักษร',
                'date' =>'กรุณากรอกวันที่',
            ]
        );
        $data=[
            'customerName'=>$request->customerName,
            'customerLastName'=>$request->customerLastName,
            'customerNumber'=>$request->customerNumber,
            'car_id'=>$request->car_id,
            'date'=>$request->date,  
        ];
        DB::table('carrecive')->insert($data);
        return redirect('/carrecive');
    }

}
