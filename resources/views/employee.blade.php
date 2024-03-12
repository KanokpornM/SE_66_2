@extends('layout')
@section('title', 'Employee')

@section('content')
    <h2>พนักงาน</h2>

    <table class="table table-bordered text-center">
        <tr>
            <td>ID</td>
            <td>ชื่อ</td>
            <td>นามสกุล</td>
            <td>ตำแหน่ง</td>
            <td>เบอร์</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
       @foreach($emp as $item)
        <tr>
            <td>{{$item->emp_id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->po_id}}</td>
            <td>{{$item->phone}}</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
       @endforeach
    </table>

@endsection
