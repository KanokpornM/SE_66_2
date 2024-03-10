@extends('layout')
@section('title','Car')

@section('content')
<h2>ข้อมูลรถ</h2>
        <p>ใส่ตาราง</p>
        <table class="table">
                <tr><td>ทะเบียนรถ</td><td>รุ่นรถ</td><td>แบรนด์</td><td>เลขคัสซี</td><td>สีรถ</td><td>ชิ่อ</td><td>สกุล</td><td>เบอร์</td><td>ลบ</td><td>แก้ไข</td></tr>
                <?php 
                        echo "<tr><td>#</td><td>#</td><td>#</td><td>#</td><td>#</td><td>#</td><td>#</td><td>#</td><td><button>ลบ</button></td><td><button>แก้ไข</button></td></tr>";
                
                 echo "</table>";?> 
@endsection