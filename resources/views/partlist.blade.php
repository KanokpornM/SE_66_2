@extends('layout')
@section('title','Partlist')
@section('searchBar','none')
@section('content')
<h2>ใบสั่งซ่อม</h2>

<style>
        .card {
            margin: 20px;
            border: 4px solid #040202;
            border-radius: 8px;
            padding: 20px;
        }
        .table {
                border: 2px solid #040202;
                
        }
        .card-header {
        text-align: center; 
        }
    </style>


    <div class="container">
        <div class="card">
            <div class="card-header " >
                <h3>สั่งซ่อม</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>วันที่สั่งซ่อม</p>
                        <p>ทะเบียนรถ</p>
                        <p>ชื่อลูกค้า</p>
                    </div>
                    <div class="col-md-6">
                        <p>เลขคัสซี</p>
                        <p>รุ่นรถ</p>
                    </div>
                </div>
            </div>

                
                <table class="table table-bordered">
                        <tr>
                            <td style="text-align:center">อาการ</td>
                            <td style="text-align:center">รหัสสินค้า</td>
                            <td style="text-align:center">อะไหล่</td>
                            <td style="text-align:center">จำนวน</td>
                            
                   
                        </tr>

                        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
                        <td style='text-align:center'>ล้อรงอ</td>
                        <td style='text-align:center'>ล้อ</td>
                        <td style='text-align:center'>4000</td>
                        <td style='text-align:center'>2</td>
                               
                    </tr>";
            }
        @endphp
                </table>
            </div>
        </div>
    </div>
    
@endsection