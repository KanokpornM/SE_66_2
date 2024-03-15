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
                <td>{{ $item->อาการ }}</td>
                <td>{{ $item->เพิ่มโดย }}</td>
                <td>{{ $item->สถานะ }}</td>
                <td><button type='button' class='btn btn-secondary'>
                        <a href="{{ route('edit', $item->carcheck_id) }}">แก้ไข</a>
                    </button>
                </td>
            </tr>
        @endforeach
        <div class="d-flex justify-content-end mt2">
            <a type="button" class="btn btn-success me2" href="{{route('addrecive')}}">เพิ่ม</a>
        </div>
    </table>

@endsection
