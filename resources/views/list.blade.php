@extends('layout')
@section('title','List')

@section('content')
<h2>List</h2>

        <p>ใส่ตาราง</p>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{route('quotation')}}" class="btn btn-secondary me-2">ใบเสนอราคา</a>
            <a href="{{route('partlist')}}" class="btn btn-primary me-2">ใบสั่งซ่อม</a>
            <a href="{{route('receipt')}}" class="btn btn-success">ใบเสร็จ</a>
        </div>
    
@endsection