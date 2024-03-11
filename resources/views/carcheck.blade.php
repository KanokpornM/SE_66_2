@extends('layout')
@section('title', 'Carcheck')

@section('content')
    <h2>ข้อมูลรับรถ</h2>
    <p class="">ID รับรถ</p>
    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">ชิ่อ</td>
            <td style="text-align:center">สกุล</td>
            <td style="text-align:center">เบอร์</td>
            <td style="text-align:center">ทะเบียนรถ</td>
            <td style="text-align:center">วันที่</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
        <td style='text-align:center'>บาส</td>
        <td style='text-align:center'>ไข่เล็ก</td>
        <td style='text-align:center'>000-0000000</td>
        <td style='text-align:center'>112aa</td>
        <td style='text-align:center'>32/13/9999</td>
        <td style='text-align:center'><button type='button' class='btn btn-danger'>ลบ</button></td>
        <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        @endphp
    </table>

@endsection
