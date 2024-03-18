@extends('layout')
@section('title', 'Employee')

@section('content')
    <h2>พนักงาน</h2>
    <div style="padding-left:1227px;">
        <a type="button" class="btn btn-success"style="width:70px; height:38px; " href="{{ route('addemployee')}}">เพิ่ม</a>
    </div>
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
                <a href="{{route('deleteemp',$item->id)}}" type="button" class="btn btn-danger" onclick="return confirm('คุณต้องการลบพนักงาน {{$item->name}} หรือไม่ ?')">ลบ</a></td>

            <td>
                <a href="#" type="button" class="btn btn-secondary">แก้ไข</a></td>
        </tr>
        
       @endforeach
    </table>
    <a type="button" class="btn btn-success" href="{{route('addemployee')}}">เพิ่มพนักงงาน</a>
@endsection
