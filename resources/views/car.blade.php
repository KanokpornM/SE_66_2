@extends('layout')
@section('title', 'Car')
@section('search',route('search'))

@section('content')
    <h2>ข้อมูลรถ</h2>
    <div class="d-flex flex-row">
        {{-- <div class="form-group">
        <form method="get" action="/search">
            <input type="text" name="search" id="search" class="mb-3 form-control" style="width:324px; height:38px;" placeholder="ค้นหาข้อมูลรถ">
        </form>
        </div> --}}
        <div style="padding-left:1227px;">
            <a type="button" class="btn btn-success"style="width:70px; height:38px; " href="{{ route('addcar')}}">เพิ่ม</a>
        </div>
    </div>
    <table style="margin-top:10px" class="table table-bordered text-center">
        <tr>
            <td>ทะเบียนรถ</td>
            <td>รุ่นรถ</td>
            <td>แบรนด์รถ</td>
            <td>เลขคัสซี</td>
            <td>สีรถ</td>
            <td>ปีของรถ</td>
            <td>ชื่อเจ้าของรถ</td>
            <td>นามสกุลเจ้าของรถ</td>
            <td>เบอร์โทรศัพท์เจ้าของรถ</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>

        @foreach ($car as $item)
            <tr>
                <td>{{$item->car_id}}</td>
                <td>{{$item->model}}</td>
                <td>{{$item->brand}}</td>
                <td>{{$item->chassis}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->year}}</td>
                <td>{{$item->ownerName}}</td>
                <td>{{$item->ownerLastName}}</td>
                <td>{{$item->ownerNumber}}</td>
                <td>
                    <a type="button" class="btn btn-danger" href="{{route('delete',$item->car_id)}}" onclick="return confirm('ต้องการลบข้อมูลรถของหมายเลขทะเบียน {{$item->car_id}} หรือไม่ ?')">ลบ</a></td>

                <td>
                    <a type="button" class="btn btn-secondary" href="{{route('edit',$item->car_id)}}">แก้ไข</a></button></td>
            </tr>
        @endforeach

@endsection
