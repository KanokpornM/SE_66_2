@extends('layout')
@section('title', 'editrecive')

@section('content')
    <h2>แก้ไขข้อมูล</h2>

    <form method="POST" action="{{ route('updaterecive', $carcheck->carcheck_id) }}">
        @csrf
        <center>
            <div class="form-group">
                <label for="carcheck_id"></label>
                <input class="w-25" style="text-align:center" type="text" name="detail" placeholder="อาการ"
                    value="{{ $carcheck->detail }}">
            </div>
            <br>
            @error('carcheck_id')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror
            <select class="form-select w-25" aria-label="Default select example">
                <option selected>สถานะ</option>
                @foreach ($data as $item)
                    <option value="{{ $item->carcheckstatus_id }}"">{{ $item->name }}</option>
                @endforeach
            </select>
            <br>
            <div class="d-flex flex-row justify-content-center" style="gap:20px">
                <a href="/recive" class="btn btn-danger" style="width:70px; height:38px;">ยกเลิก</a> 
                <input type="submit" value="แก้ไข" class="btn btn-success" style="width:70px; height:38px;">
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
