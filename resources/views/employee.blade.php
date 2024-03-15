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
            <td style='text-align:center' class='content-center'><button type='button' class='btn btn-danger'>
                <a href="{{route('delete',$item->car_id)}}" onclick="return confirm('ต้องการลบข้อมูลรถของหมายเลขทะเบียน {{$item->car_id}} หรือไม่ ?')">ลบ</a></button></td>

            <td style='text-align:center'><button type='button' class='btn btn-secondary'>
                <a href="{{route('edit',$item->car_id)}}">แก้ไข</a></button></td>
        </tr>
       
       @endforeach
    </table>

@endsection
