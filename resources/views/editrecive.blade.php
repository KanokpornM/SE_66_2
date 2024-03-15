@extends('layout')
@section('title', 'addrecive')

@section('content')
    <h2>แก้ไขข้อมูล</h2>

    <form method="POST" action="{{ route('update', $carcheck->carcheck_id) }}">
        @csrf
        <center>
            <div class="form-group">
                <label for="checkcarstatus_id">สถานะ</label><br>
                <text>1-พัง 2-ไม่พัง</text><br>
                <input style="text-align: center" type="integer" name="checkcarstatus_id" placeholder=""
                    value="{{ $carcheck->checkcarstatus_id }}">
            </div>
            @error('checkcarstatus_id')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror
            <br>

            <div>
                <center>
                    <a type="button" class="btn btn-danger" href="{{ route('recive') }}">ยกเลิก</a>
                    <a type="summit" class="btn btn-success"
                        onclick="return confirm('ต้องการอัพเดต{{ $carcheck->checkcarstatus_id }} หรือไม่')">อัปเดต</a>
                </center>
            </div>
    </form>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
