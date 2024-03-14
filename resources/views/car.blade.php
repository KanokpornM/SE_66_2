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
    <table style="margin-top:10px"class="table table-bordered">
        <tr>
            <td style="text-align:center">ทะเบียนรถ</td>
            <td style="text-align:center">รุ่นรถ</td>
            <td style="text-align:center">แบรนด์รถ</td>
            <td style="text-align:center">เลขคัสซี</td>
            <td style="text-align:center">สีรถ</td>
            <td style="text-align:center">ชื่อเจ้าของรถ</td>
            <td style="text-align:center">นามสกุลเจ้าของรถ</td>
            <td style="text-align:center">เบอร์โทรศัพท์เจ้าของรถ</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>

        @foreach ($car as $item)
            <tr>
                <td style='text-align:center'>{{$item->car_id}}</td>
                <td style='text-align:center'>{{$item->model}}</td>
                <td style='text-align:center'>{{$item->brand}}</td>
                <td style='text-align:center'>{{$item->chassis}}</td>
                <td style='text-align:center'>{{$item->color}}</td>
                <td style='text-align:center'>{{$item->ownerName}}</td>
                <td style='text-align:center'>{{$item->ownerLastName}}</td>
                <td style='text-align:center'>{{$item->ownerNumber}}</td>
                <td style='text-align:center' class='content-center'><button type='button' class='btn btn-danger'>
                    <a href="{{route('delete',$item->car_id)}}" onclick="return confirm('ต้องการลบข้อมูลรถของหมายเลขทะเบียน {{$item->car_id}} หรือไม่ ?')">ลบ</a></button></td>

                <td style='text-align:center'><button type='button' class='btn btn-secondary'>
                    <a href="{{route('edit',$item->car_id)}}">แก้ไข</a></button></td>
            </tr>
        @endforeach

@endsection
