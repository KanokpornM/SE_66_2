@extends('layout')
@section('title', 'AddCarRevice')

@section('content')
    <h2>เพิ่มข้อมูลรับรถ</h2>
    <div class="">
        <center>
        <input type="text" class="from-control" placeholder="ขื่อ"> 
        <input type="text" class="from-control" placeholder="นามสกุล"><br><br>
        <input type="text" class="from-control" placeholder="เบอร์โทรศัพท์"> <br><br>
        <input type="date" class="from-control" placeholder="วันที่"><br><br>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              ทะเบียนรถ
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">####</a></li>
              
            </ul>
          </div><br>
    </center>
    </div> <br><br>
    </center>
    </div>
    <div>
        <center>
        <a type="button" class="btn btn-danger" href="{{ route('car') }}">ยกเลิก</a>
        <a type="button" class="btn btn-success" href="{{ route('car') }}">เพิ่ม</a>
        </center>
    </div>
    
@endsection
