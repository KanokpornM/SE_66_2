@extends('layout')
@section('title', 'AddRecive')

@section('content')
    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <h1>ID รับรถ</h1>
    <div class="">
        <center>
        <input type="text" class="from-control" placeholder="No."> <br><br>
        <input type="text" class="from-control" placeholder="อาการ"><br><br>
        
        <select class="form-select form-select-border-width:2px" aria-label="Small select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

    <div>
        <center>
        <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
        <a type="button" class="btn btn-success" href="{{ route('recive') }}">เพิ่ม</a>
        </center>
    </div>
    
@endsection
