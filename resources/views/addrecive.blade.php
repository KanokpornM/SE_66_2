@extends('layout')
@section('title', 'AddRecive')

@section('content')
    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <h1>ID รับรถ</h1>
    <div class="">
        <center>
        <input type="text" class="from-control" placeholder="No."> <br><br>
        <input type="text" class="from-control" placeholder="อาการ"><br><br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              สถานะ
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">####</a></li>
              
            </ul>
          </div><br>
    </center>
    </div>
    <div>
        <center>
        <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
        <a type="button" class="btn btn-success" href="{{ route('recive') }}">เพิ่ม</a>
        </center>
    </div>
    
@endsection
