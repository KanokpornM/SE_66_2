@extends('layout')
@section('title', 'Carrecive')


@section('content')
    <h2>ข้อมูลรับรถ</h2>
    
    <table class="table table-bordered text-center">
        <tr>
            <td>ID</td>
            <td>ชิ่อ</td>
            <td>สกุล</td>
            <td>เบอร์</td>
            <td>ทะเบียนรถ</td>
            <td>วันที่</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        <tbody>
            @foreach ($carrecive as $recive) 
            <tr>
                <td>{{$recive->carR_id}}</td>
                <td>{{$recive->customerName}}</td>
                <td>{{$recive->customerLastName}}</td>
                <td>{{$recive->customerPhone}}</td>
                <td>{{$recive->car_id}}</td>
                <td>{{$recive->date}}</td>
                <td><a href="{{route('deletecarrecive',$recive->carR_id)}}" onclick="return confirm('ต้องการลบข้อมูลรับรถหมายเลข {{$recive->carR_id}} ใช่หรือไม่')">
                    <button type='button' class='btn btn-danger'>ลบ</button></a></td>    
                <td>
                    <a type="button" class="btn btn-secondary" href="{{route('editcarrecive',$recive->carR_id)}}">แก้ไข</a></button></td> 
            </tr>
            @endforeach
        </tbody>
    </table>
<div class="d-flex justify-content-end mt2">
        <a type="button" class="btn btn-success me2" href="{{ route('addcarrecive') }}">เพิ่ม</a>
    </div>
@endsection
