@extends('layout')
@section('title', 'AddRecive')
@section('searchBar', 'none')
@section('content')

    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <form action="{{ route('insertrecive') }}" method="POST">
        <div class="">
            <center>
                <select class="form-select w-25" aria-label="Default select example">
                    <option selected>เลือกรถ</option>
                    @foreach ($data1 as $item)
                        <option value="{{ $item->carR_id }}"">{{ $item->car_id }}</option>
                    @endforeach
                </select>
                <br>
                <input type="text" class="w-25" style="text-align:center" placeholder="ระบุอาการ" name="detail">
                @error('detail')
                    <div style="color:red">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
                <br><br>
                <select class="form-select w-25" aria-label="Default select example">
                    <option selected>สถานะ</option>
                    @foreach ($data3 as $item)
                        <option value="{{ $item->carcheckstatus_id }}"">{{ $item->name }}</option>
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
                        <a type="submit" class="btn btn-success" href="{{ route('recive') }}">เพิ่ม</a>
                    </center>
                </div>
    </form>
@endsection
