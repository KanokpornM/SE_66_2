@extends('layout')
@section('title','recipt')
@section('searchBar','none')
@section('content')
<h2>ใบเเสร็จ</h2>
    
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
                <h3>ใบเสร็จ</h3>
            </div>

            <div class="card-body">
                <p>ทะเบียนรถ</p>
                <p>ชื่อลูกค้า</p>
            </div>
                
                <table class="table table-bordered">
                        <tr>
                            <td style="text-align:center">อาการ</td>
                            <td style="text-align:center">อะไหล่</td>
                            <td style="text-align:center">หน่วยละ(บาท)</td>
                            <td style="text-align:center">จำนวน</td>
                            <td style="text-align:center">ราคา</td>
                   
                        </tr>

                        @php
            for ($x = 0; $x < 5; $x++) {
                echo "<tr>
                        <td style='text-align:center'>ล้อรงอ</td>
                        <td style='text-align:center'>ล้อ</td>
                        <td style='text-align:center'>4000</td>
                        <td style='text-align:center'>2</td>
                        <td style='text-align:center'>8000</td>          
                    </tr>";
            }
        @endphp


                        <tr>
                                <td colspan="4" style="text-align:right"><strong>ราคารวมทั้งหมด:</strong></td>
                                <td style="text-align:center">8000</td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <button type="botton" name="botton" id="print" onclick="window.print();">print</button>
    <a href="{{ url('/generate-receipt-pdf') }}">ดาวน์โหลด ใบเสร็จ</a>

    
@endsection