@extends('layout')
@section('title', 'Carrecive')

@section('content')
    <h2>ประวัติอาการรถ</h2>

    <p class="">ID รับรถ</p>
    <table class="table table-bordered text-center">
        <tr>
            <td>อาการ</td>
            <td>ลบ</td>
            <td>แก้ไข</td>
        </tr>
        @php
            $z = ['เบรคสะบัด', 'คลัทช์เสีย', 'เกียร์หลุด', 'เครื่องสะดุด', 'เพลาหัก', 'สลักหาย'];
            foreach ($z as $s) {
                echo "<tr>
    <td>$s</td>
    <td><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
</tr>";
            }
        @endphp
    </table>

@endsection
