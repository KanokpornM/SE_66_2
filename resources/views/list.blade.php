@extends('layout')
@section('title', 'List')

@section('content')
    <h2>List</h2>

    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">อาการ</td>
            <td style="text-align:center">อะไหล่</td>
            <td style="text-align:center">จำนวน</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'>$x</td>
    <td style='text-align:center'><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        @endphp
    </table>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('quotation') }}" class="btn btn-secondary me-2">ใบเสนอราคา</a>
        <a href="{{ route('partlist') }}" class="btn btn-primary me-2">ใบสั่งซ่อม</a>
        <a href="{{ route('receipt') }}" class="btn btn-success">ใบเสร็จ</a>
    </div>

@endsection
