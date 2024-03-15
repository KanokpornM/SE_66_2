@extends('layout')
@section('title', 'AddCarCheck')

<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>เพิ่มประวัติอาการรถ</h2>
   
    <form action="{{ route('insertcarcheck') }}" method="POST">
        @csrf 
        
        <div class="">
            <center>
                <h3>เลือกรถ</h3>
                <select name="car_id" class="form-select w-25" style="text-align:center">
                    <option selected hidden >เลือกรถ</option>
                    @foreach($cars as $car)
                        <option value="{{ $car->carR_id }}">{{ $car->car_id }}</option>
                    @endforeach
                </select>                
            </center>
        </div><br>
        
        <div class="">
            <center>
                <h3>อาการ</h3>
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
                <button type="submit" class="btn btn-success">บันทึก</button>
                <a type="button" class="btn btn-danger" href="{{ route('carcheck') }}">ยกเลิก</a>
            </center>
        </div>
    </form>
@endsection
