@extends('layout')
@section('title', 'Carcheck')


@section('content')
    <h2>ข้อมูลรับรถ</h2>
    
    <table class="table table-bordered text-center">
        <tr>
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
                <td>{{$recive->customerName}}</td>
                <td>{{$recive->customerLastName}}</td>
                <td>{{$recive->customerPhone}}</td>
                <td>{{$recive->car_id}}</td>
                <td>{{$recive->date}}</td>
                <td><button type='button' class='btn btn-danger'>ลบ</button></td>
                <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div class="d-flex justify-content-end mt2">
        <a type="button" class="btn btn-success me2" href="{{ route('addcarrecive') }}">เพิ่ม</a>
    </div>
@endsection
