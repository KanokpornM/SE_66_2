<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    function index(){
    
        $car=DB::table('car')->get();
        return view('car',compact('car'));
    }
    function addcar(){
        return view('addcar');
    }
    function insert(Request $request){
        $request->validate(
            [
                'car_id'=>'required|max:7',
                'model'=>'required',
                'brand'=>'required',
                'chassis'=>'required|max:17',
                'color'=>'required',
                'year'=>'required',
                'year'=>'required|max:4',
                'ownerName'=>'required',
                'ownerLastName'=>'required',
                'ownerNumber'=>'required|max:10',
            ],
            [
                'car_id.required' =>'กรุณากรอกทะเบียนรถ',
                'car_id.max' => 'ทะเบียนรถไม่ควรเกิน 7 ตัวอักษร',
                'model.required' =>'กรุณากรอกรุ่นรถ',
                'brand.required' =>'กรุณากรอกแบรนด์รถ',
                'chassis.required' =>'กรุณากรอกเลขคัสซี',
                'chassis.max' => 'เลขคัสซีไม่ควรเกิน 17 ตัวอักษร',
                'color.required' =>'กรุณากรอกสีรถ',
                'year.required' =>'กรุณากรอกปีของรถ',
                'year.max' => 'ปีของรถไม่ควรเกิน 4 ตัวอักษร',
                'ownerName.required' =>'กรุณากรอกชื่อเจ้าของรถ',
                'ownerLastName.required' =>'กรุณากรอกนามสกุลเจ้าของรถ',
                'ownerNumber.required' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถ',
                'ownerNumber.max' => 'เบอร์โทรศัพท์เจ้าของรถไม่ควรเกิน 7 ตัวอักษร',
            ]
        );
        $data=[
            'car_id'=>$request->car_id,
            'model'=>$request->model,
            'brand'=>$request->brand,
            'chassis'=>$request->chassis,
            'color'=>$request->color,
            'year'=>$request->year,
            'ownerName'=>$request->ownerName,
            'ownerLastName'=>$request->ownerLastName,
            'ownerNumber'=>$request->ownerNumber,
        ];
        DB::table('car')->insert($data);
        return redirect('/car');
    }

    function edit($car_id){
        $car=DB::table('car')->where('car_id',$car_id)->first();
        return view('editcar',compact('car'));
    }

    function update(Request $request,$car_id){
        $request->validate(
            [
                'car_id'=>'required|max:7',
                'model'=>'required',
                'brand'=>'required',
                'chassis'=>'required|max:17',
                'color'=>'required',
                'year'=>'required',
                'year'=>'required|max:4',
                'ownerName'=>'required',
                'ownerLastName'=>'required',
                'ownerNumber'=>'required|max:10',
            ],
            [
                'car_id.required' =>'กรุณากรอกทะเบียนรถ',
                'car_id.max' => 'ทะเบียนรถไม่ควรเกิน 7 ตัวอักษร',
                'model.required' =>'กรุณากรอกรุ่นรถ',
                'brand.required' =>'กรุณากรอกแบรนด์รถ',
                'chassis.required' =>'กรุณากรอกเลขคัสซี',
                'chassis.max' => 'เลขคัสซีไม่ควรเกิน 17 ตัวอักษร',
                'color.required' =>'กรุณากรอกสีรถ',
                'year.required' =>'กรุณากรอกปีของรถ',
                'year.max' => 'ปีของรถไม่ควรเกิน 4 ตัวอักษร',
                'ownerName.required' =>'กรุณากรอกชื่อเจ้าของรถ',
                'ownerLastName.required' =>'กรุณากรอกนามสกุลเจ้าของรถ',
                'ownerNumber.required' =>'กรุณากรอกเบอร์โทรศัพท์เจ้าของรถ',
                'ownerNumber.max' => 'เบอร์โทรศัพท์เจ้าของรถไม่ควรเกิน 7 ตัวอักษร',
            ]
        );
        $data=[
            'car_id'=>$request->car_id,
            'model'=>$request->model,
            'brand'=>$request->brand,
            'chassis'=>$request->chassis,
            'color'=>$request->color,
            'year'=>$request->year,
            'ownerName'=>$request->ownerName,
            'ownerLastName'=>$request->ownerLastName,
            'ownerNumber'=>$request->ownerNumber,
        ];
        DB::table('car')->where('car_id',$car_id)->update($data);
        return redirect('/car');
    }

    function search(Request $request){
        $search = $request->search;

        $car = DB::table('car')->where(function($query) use ($search){
            $query->where('car_id','like',"%$search%");
        })->get();

        return view('/car',compact('car','search'));
    }

    function delete($car_id){
        DB::table('car')->where('car_id',$car_id)->delete();
        return redirect('/car');
    }
}
