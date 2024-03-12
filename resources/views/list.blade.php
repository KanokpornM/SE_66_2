@extends('layout')
@section('title', 'List')

@section('content')
    <h2>List</h2>

    <table class="table table-bordered text-center">
        <tr>
            <td>อาการ</td>
            <td>อะไหล่</td>
            <td>จำนวน</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td>$x</td>
    <td>$x</td>
    <td>$x</td>
    <td><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
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
