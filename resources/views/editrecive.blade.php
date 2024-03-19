@extends('layout')
@section('title', 'แก้ไขข้อมูลตรวจสอบรถ')
@section('searchBar', 'none')
@section('content')

    <h2>แก้ไขข้อมูลตรวจสอบรถ</h2>
    <form action="{{ route('updaterecive', ['carcheck_id' => $carcheck->carcheck_id]) }}" method="POST">
        @csrf
        @method('PUT')

        <center>
            <div class="form-group">
                <label for="detail">รายละเอียด:</label>
                <input type="text" class="form-control" id="detail" name="detail" value="{{ $carcheck->detail }}"
                    disabled>
            </div>

            <div class="form-group">
                <label for="checkcarstatus_id">สถานะ:</label>
                <select class="form-select w-25" id="checkcarstatus_id" name="checkcarstatus_id">
                    <option value="1" {{ $carcheck->checkcarstatus_id == 1 ? 'selected' : '' }}>พัง</option>
                    <option value="2" {{ $carcheck->checkcarstatus_id == 2 ? 'selected' : '' }}>ไม่พัง</option>
                </select>
            </div>
            <br>
            <a href="{{ route('recive') }}" class="btn btn-danger">ยกเลิก</a>
            <button type="submit" class="btn btn-success">บันทึก</button>
        </center>
    </form>

@endsection
