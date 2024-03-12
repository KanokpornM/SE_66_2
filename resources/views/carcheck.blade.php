@extends('layout')
@section('title', 'Carcheck')

@section('content')
    <h2>ข้อมูลรับรถ</h2>
    <p class="">ID รับรถ</p>
    <table class="table table-bordered text-center">
        <tr>
            <td>ชิ่อ</td>
            <td>สกุล</td>
            <td>เบอร์</td>
            <td>ทะเบียนรถ</td>
            <td>วันที่</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
        <td>บาส</td>
        <td>ไข่เล็ก</td>
        <td>000-0000000</td>
        <td>112aa</td>
        <td>32/13/9999</td>
        <td><button type='button' class='btn btn-danger'>ลบ</button></td>
        <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        @endphp
    </table>

@endsection
