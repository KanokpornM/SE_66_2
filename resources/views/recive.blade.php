@extends('layout')
@section('title', 'recive')

@section('content')
    <h2>ตรวจสอบรถ</h2>
    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">อาการ</td>
            <td style="text-align:center">เพิ่มโดย</td>
            <td style="text-align:center">สถานะ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
</tr>";
            }
        @endphp
    </table>

@endsection
