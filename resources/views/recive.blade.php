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
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td>$x</td>
    <td>$x</td>
    <td>$x</td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
</tr>";
            }
        @endphp
    </table>

@endsection
