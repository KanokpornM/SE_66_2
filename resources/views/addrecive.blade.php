@extends('layout')
@section('title', 'AddRecive')
@section('searchBar', 'none')
@section('content')

    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <form action="{{ route('insertrecive') }}" method="POST">
        @csrf

        <div class="">
            <center>
                <select name="car_id" class="form-select w-25" style="text-align:center">
                    <option selected>เลือกรถ</option>
                    @foreach ($cars as $car)
                        <option value="{{ $car->carR_id }}">{{ $car->car_id }}</option>
                    @endforeach
                </select>
            </center>
        </div><br>

        <div class="">
            <center>
                <input type="text" class="w-25" style="text-align:center" placeholder="ระบุอาการ" name="detail">
                @error('detail')
                    <div style="color:red">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </center>
        </div><br>

        <br>
        <div>
            <center>
                <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
                <button type="submit" class="btn btn-success">เพิ่ม</button>
            </center>
        </div>
    </form>
@endsection
