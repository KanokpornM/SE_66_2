@extends('layout')
@section('title', 'AddCarCheck')
@section('searchBar','none')
@section('content')
    <h2>เพิ่มประวัตอาการรถ</h2>
   
    <div class="">
        <center>
            <h3>ทะเบียนรถ</h3>
        <input type="text" class="from-control" placeholder="อาการ"> 
    </center>
    </div><br>
    <div>
        <center>
        <a type="button" class="btn btn-danger" href="{{ route('carcheck') }}">ยกเลิก</a>
        <a type="button" class="btn btn-success" href="{{ route('carcheck') }}">เพิ่ม</a>
        </center>
    </div>
    
@endsection
