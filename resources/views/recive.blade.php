@extends('layout')
@section('title', 'recive')

@section('content')
    <h2>ตรวจสอบรถ</h2>
    <table class="table table-bordered text-center">
        <tr>
            <td>อาการ</td>
            <td>เพิ่มโดย</td>
            <td>สถานะ</td>
            <td>แก้ไข</td>
        </tr>
        @foreach ($recives as $item)
            <tr>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->name2 }}</td>
                <td><a type="button" class="btn btn-secondary" href="{{ route('edit', $item->carcheck_id) }}">แก้ไข</a></td>
            </tr>
        @endforeach
        <div class="d-flex justify-content-end mt2">
            <a type="button" class="btn btn-success me2" href="{{route('addrecive')}}">เพิ่ม</a>
        </div>
    </table>

@endsection
