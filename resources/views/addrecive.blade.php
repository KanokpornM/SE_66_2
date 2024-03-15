@extends('layout')
@section('title', 'AddRecive')
@section('searchBar', 'none')
@section('content')
    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <h1>ID รับรถ</h1>
    <div class="">
        <center>
            {{-- <input type="text" class="from-control" placeholder="No."> <br><br>
            <input type="text" class="from-control" placeholder="อาการ"><br><br> --}}

            <select class="form-select w-25" aria-label="Default select example">
                <option selected>อาการ</option>
                @foreach ($data1 as $item)
                    <option value="{{ $item->carcheck_id }}"">{{ $item->detail }}</option>
                @endforeach
            </select>
            <br>
            <select class="form-select w-25" aria-label="Default select example">
                <option selected>เพิ่มโดย</option>
                @foreach ($data2 as $item)
                    <option value="{{ $item->addBy_id }}"">{{ $item->name}}</option>
                @endforeach
            </select>
            <br>
            <select class="form-select w-25" aria-label="Default select example">
                <option selected>เพิ่มโดย</option>
                @foreach ($data3 as $item)
                    <option value="{{$item->carcheckstatus_id}}"">{{$item->name}}</option>
                @endforeach
            </select>
            {{-- <select class="form-select form-select-border-width:2px" aria-label="Small select example" my-2>
                <option selected>สถานะ</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select> --}}
            <br>
            <div>
                <center>
                    <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
                    <a type="button" class="btn btn-success" href="{{ route('recive') }}">เพิ่ม</a>
                </center>
            </div>

        @endsection
