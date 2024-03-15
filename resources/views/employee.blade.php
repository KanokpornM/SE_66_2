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
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->po}}</td>
            <td>{{$item->phone}}</td>
            <td>
                <a type="button" class="btn btn-danger" href="">ลบ</a></td>

            <td>
                <a type="button" class="btn btn-secondary">แก้ไข</a></button></td>
        </tr>
       
       @endforeach
    </table>

@endsection
