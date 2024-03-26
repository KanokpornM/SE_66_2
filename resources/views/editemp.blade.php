@extends('layout')
@section('title', 'AddCarCheck')

<!-- hide search bar     -->
@section('searchBar', 'none')

@section('content')
    <h2>เพิ่มพนักงงาน</h2>
    <form method="POST" action="{{route('updateemp',$emp->id)}}">
        @csrf
        <center>
            <div class="form-group">
                <label for="name"></label>
                <input class="w-25" style="text-align:center" type="text" name="name" placeholder="ชื่อ" value="{{$emp->name}}">
            </div>
            @error('name')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror
            <br>

            <div class="form-group">
                <label for="lastname"></label>
                <input class="w-25" style="text-align:center" type="text" name="lastname" placeholder="นามสกุล" value="{{$emp->lastname}}">
            </div>
            @error('lastname')
                <div style="color:red">
                    <span>{{ $message }}</span>
                </div>
            @enderror

            <div class="form-group">
                <label for="po_id"></label>
                <select name="po_id" class="form-select w-25" style="text-align:center">
                    <option selected hidden value="{{$emp->po}}">{{$emp->po}}</option>
                    @foreach ($po as $item)
                        <option value="{{ $item->po_id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('po_id')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
            <br>

            <div class="form-group">
                <label for="phone"></label>
                <input class="w-25" style="text-align:center" type="text" name="phone"placeholder="เบอร์ติดต่อ"value="{{$emp->phone}}">
            </div>
            @error('phone')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        </center>
        <div>
            <center>
                <br>
                <a type="button" class="btn btn-danger" href="{{ route('employee') }}">ยกเลิก</a>
                <input type="submit" value="บันทึก" class="btn btn-success">
            </center>
        </div>
    </form>
@endsection
