@extends('layout')
@section('title', 'List')

@section('search',route('quotatSearch'))



@section('content')
    
    <h2>รายการ</h2>

    <div style="padding-left:1227px;">
        <a type="button" class="btn btn-success"style="width:70px; height:38px; " href="{{ route('addquotat')}}">เพิ่ม</a>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <td>อาการ</td>
            <td>อะไหล่</td>
            <td>จำนวน</td>
            <td>วันที่</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @foreach ($quotation as $item)
        <tr>
            <td>{{$item->quotation_id}}</td>
            <td>{{$item->carR_id}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->date}}</td>

            <td><a href="{{route('deletequotat',$item->quotation_id)}}" onclick="return confirm('ต้องการลบรายการ {{$item->quotation_id}} ใช่หรือไม่')">
                <button type='button' class='btn btn-danger'>ลบ</button></a></td>    
            <td>
                <a type="button" class="btn btn-secondary" href="{{route('editquotat',$item->quotation_id)}}">แก้ไข</a></td>
        </tr>
    @endforeach

    </table>

@endsection
