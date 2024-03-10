@extends('layout')
@section('title', 'Car')

@section('content')
    <h2>ข้อมูลรถ</h2>
    <table class="table">
        <tr>
            <td>ทะเบียนรถ</td>
            <td>รุ่นรถ</td>
            <td>แบรนด์</td>
            <td>เลขคัสซี</td>
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
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td>$x</td>
                        <td><button type='button' class='btn btn-danger'>ลบ</button></td>
                        <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
                    </tr>";
            }
        @endphp
    </table>
@endsection
