@extends('layout')
@section('title', 'AddCarCheck')

<!-- hide search bar     -->
@section('searchBar', 'none')

@section('content')
    <h2>เพิ่มพนักงงาน</h2>
    <center>
        <input  class="w-25" style="text-align:center" type="text" name="customerName" placeholder="ชื่อ"><br><br>
        <input  class="w-25" style="text-align:center" type="text" name="customerName" placeholder="นามสกุล"><br><br>
        <select name="car_id" class="form-select w-25" style="text-align:center">
            <option selected hidden>ตำแหน่ง</option>
            @foreach($po as $item)
            <option value="{{$item->po_id}}">{{$item->name}}</option>
            @endforeach
        </select>                <br>
        <input  class="w-25" style="text-align:center" type="text" name="customerName" placeholder="เบอร์ติดต่อ"><br><br>
    </center>
    <div>
        <center>
            <button type="submit" class="btn btn-success" href="#">บันทึก</button>
            <a type="button" class="btn btn-danger" href="{{ route('employee') }}">ยกเลิก</a>
        </center>
    </div>
@endsection
