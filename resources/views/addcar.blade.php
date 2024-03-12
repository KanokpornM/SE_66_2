@extends('layout')
@section('title', 'addcar')

@section('content')
    <h2>เพิ่มข้อมูลรถ</h2>
    <div class="">
        <center>
        <input type="text" class="from-control" placeholder="ขื่อ"> 
        <input type="text" class="from-control" placeholder="นามสกุล"><br><br>
        <input type="text" class="from-control" placeholder="เบอร์โทรศัพท์"> <br><br>
        <input type="text" class="from-control" placeholder="ทะเบียนรถ"><br><br>
        <input type="text" class="from-control" placeholder="รุ่่นรถ"><br><br>
        <input type="text" class="from-control" placeholder="แบรนด์"><br><br>
        <input type="text" class="from-control" placeholder="เลขคัสซี"><br><br>
        <input type="text" class="from-control" placeholder="สีรถ"><br><br>
    </center>
    </div>
    <div>
        <center>
        <a type="button" class="btn btn-danger" href="{{ route('car') }}">ยกเลิก</a>
        <a type="button" class="btn btn-success" href="{{ route('car') }}">เพิ่ม</a>
        </center>
    </div>
    
@endsection
