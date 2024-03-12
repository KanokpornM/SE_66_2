@extends('layout')
@section('title', 'Car')

@section('content')
    <h2>ข้อมูลรถ</h2>
    <table class="table table-bordered text-center">
        <tr>
            <td>ทะเบียนรถ</td>
            <td>รุ่นรถ</td>
            <td>แบรนด์</td>
            <td >เลขคัสซี</td>
            <td>สีรถ</td>
            <td>ชิ่อ</td>
            <td>สกุล</td>
            <td>เบอร์</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>

                        <td>121aa</td>
                        <td>CIVIC</td>
                        <td>HONDA</td>
                        <td>12321412-21321</td>
                        <td>ฺBlack</td>
                        <td>บาส</td>
                        <td>ไข่เล็ก</td>
                        <td>000-0000000</td>
                        <td><a type='button' href='#'class='btn btn-danger'>ลบ</a></td>
                        <td><a type='button'href='http://127.0.0.1:8000/addcar' class='btn btn-secondary'>แก้ไข</a></td>
                    </tr>";
            }
        @endphp
    <a type="button" class="btn btn-success" href="{{ route('addcar') }}">เพิ่ม</a>
    
@endsection
