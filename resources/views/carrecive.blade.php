@extends('layout')
@section('title', 'Carrecive')

@section('content')
    <h2>ประวัติอาการรถ</h2>

    <p class="">ID รับรถ</p>
    <table class="table table-bordered">
        <tr>
            <td style="text-align:center">อาการ</td>
            <td style="text-align:center">ลบ</td>
            <td style="text-align:center">แก้ไข</td>
        </tr>
        @php
            $z = array('เบรคสะบัด', 'คลัทช์เสีย', 'เกียร์หลุด', 'เครื่องสะดุด', 'เพลาหัก', 'สลักหาย');
            foreach ($z as $s) {
                echo "<tr>
    <td style='text-align:center'>$s</td>
    <td style='text-align:center'><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td style='text-align:center'><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
</tr>";
            }
        @endphp
    </table>

@endsection
