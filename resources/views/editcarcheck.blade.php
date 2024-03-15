@extends('layout')
@section('title', 'EditCarCheck')

<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>แก้ไขประวัติอาการรถ</h2>
   
    <form action="{{ route('updatecarcheck',$cars->carcheck_id) }}" method="POST">
        @csrf 
        
        <div class="form-group">
            <center>
                <h3>อาการ</h3>
                <label for="carcheck_id"></label>
                <input style="text-align:center" type="text" name="detail" placeholder="ระบุอาการ" value="{{$cars->detail}}">
                @error('detail')
                <div style="color:red">
                    <span>{{$message}}</span>
                </div>
                @enderror 
            </center>
        </div><br>
        
        <div>
            <center>
                <button type="submit" class="btn btn-success">บันทึก</button>
                <a type="button" class="btn btn-danger" href="{{ route('carcheck') }}">ยกเลิก</a>
            </center>
        </div>
    </form>
@endsection
