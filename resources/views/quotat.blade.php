@extends('layout')
@section('title', 'List')

@section('search',route('listSearch'))



@section('content')
    
    <h2>รายการ</h2>

    <table class="table table-bordered text-center">
        <tr>
            <td>อาการ</td>
            <td>อะไหล่</td>
            <td>จำนวน</td>
            <td>ลบ</td>
        </tr>
        <!--
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
    <td>$x</td>
    <td>$x</td>
    <td>$x</td>
    <td><button type='button' class='btn btn-danger'>ลบ</button></td>
    <td><button type='button' class='btn btn-secondary'>แก้ไข</button></td>
    </tr>";
            }
        -->
    </table>

@endsection
