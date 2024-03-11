@extends('layout')
@section('title', 'Car')

@section('content')
    <h2>ข้อมูลรถ</h2>
    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">ทะเบียนรถ</td>
            <td style="text-align:center">รุ่นรถ</td>
            <td style="text-align:center">แบรนด์</td>
            <td style="text-align:center">เลขคัสซี</td>
            <td style="text-align:center">สีรถ</td>
            <td style="text-align:center">ชิ่อ</td>
            <td style="text-align:center">สกุล</td>
            <td style="text-align:center">เบอร์</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>

                        <td style='text-align:center'>121aa</td>
                        <td style='text-align:center'>CIVIC</td>
                        <td style='text-align:center'>HONDA</td>
                        <td style='text-align:center'>12321412-21321</td>
                        <td style='text-align:center'>ฺBlack</td>
                        <td style='text-align:center'>บาส</td>
                        <td style='text-align:center'>ไข่เล็ก</td>
                        <td style='text-align:center'>000-0000000</td>
                        <td style='text-align:center' class='content-center'><button type='button' class='btn btn-danger'>ลบ</button></td>
                        <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
                    </tr>";
            }
        @endphp
    
    
@endsection
