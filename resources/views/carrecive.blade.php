@extends('layout')
@section('title', 'Carrecive')

@section('content')
    <h2>ประวัติอาการรถ</h2>

    <p class="">ID รับรถ</p>
    <table class="table">
        <tr>
            <td>อาการ</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td>$x</td>
    <td><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
</tr>";
            }
        @endphp
    </table>

@endsection
