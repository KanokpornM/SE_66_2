@extends('layout')
@section('title', 'Carcheck')

@section('content')
    <h2>ประวัติอาการรถ</h2>

    <p class="">ID รับรถ</p>
    <table class="table table-bordered text-center">

        <tr>
            <td>อาการ</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @foreach($carcheck as $item)

        <tr>
            <td>{{$item->detail}}</td>
            <td><a href="{{route('carcheckdelete',$item->carcheck_id)}}" onclick="return confirm('ต้องการลบใช่หรือไม่')">
                <button type='button' class='btn btn-danger'>ลบ</button></a></td>

            <td><a button type='button' class='btn btn-secondary' href="{{route('editcarcheck',$item->carcheck_id)}}">แก้ไข</a></td>

        </tr>
        @endforeach


    </table>

    <div class="d-flex justify-content-end mt2">
        <a type="button" class="btn btn-success me2" href="{{ route('addcarcheck') }}">เพิ่ม</a>
    </div>

@endsection
