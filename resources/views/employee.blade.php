@extends('layout')
@section('title', 'Employee')

@section('content')
    <h2>พนักงาน</h2>

    <table class="table table-bordered text-center">
        <tr>
            <td>ID</td>
            <td>ชิ่อ</td>
            <td>นามสกุล</td>
            <td>ตำแหน่ง</td>
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
    <td><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        @endphp
    </table>

@endsection
