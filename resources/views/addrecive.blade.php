@extends('layout')
@section('title', 'AddRecive')
@section('searchBar', 'none')
@section('content')

    <h2>เพิ่มข้อมูลตรวจสอบรถ</h2>
    <form action="{{ route('insertrecive') }}" method="POST">
        {{-- @csrf
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
                <select class="form-select form-select-border-width:2px" aria-label="Small select example" my-2>
                <option selected>สถานะ</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
                <br>
                <div>
                    <center>
                        <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
                        <a type="submit" class="btn btn-success" href="{{ route('recive') }}">เพิ่ม</a>
                        <button type="submit" class="btn btn-success">เพิ่ม</button>
                    </center>
                </div> --}}
                @csrf 
        
        <div class="">
            <center>
                <select name="car_id" class="form-select w-25" style="text-align:center">
                    <option selected>เลือกรถ</option>
                    @foreach($cars as $car)
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
                    <span>{{$message}}</span>
                </div>
                @enderror 
            </center>
        </div><br>

        <div>
            <center>
                
                 <select name="carcheckstatus_id" class="form-select w-25" style="text-align:center">
                    <option selected>สถานะ</option>
                    <option value="1">พัง</option>
                    <option value="2">ไม่พัง</option>
                   {{-- @foreach($data as $data)
                        <option value="{{ $data->carcheckstatus_id }}">{{ $data->name }}</option>
                    @endforeach
                    <option value="1">พัง</option>
                    <option value="2">ไม่พัง</option>--}}
                </select> 
            </center>
        </div>
        <br>
        <div>
            <center>
                <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
                <button type="submit" class="btn btn-success">เพิ่ม</button>
            </center>
        </div>
    </form>
@endsection
