@extends('layout')
@section('title', 'Employee')

@section('content')
    <h2>พนักงาน</h2>

    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">ID</td>
            <td style="text-align:center">ชิ่อ</td>
            <td style="text-align:center">นามสกุล</td>
            <td style="text-align:center">ตำแหน่ง</td>
            <td style="text-align:center">เบอร์</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        @endphp
    </table>

@endsection
