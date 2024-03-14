@extends('layout')
@section('title', 'editcar')

@section('content')
    <h2 >แก้ไขข้อมูลรถ</h2>

    <form method="POST" action="{{route('update',$car->car_id)}}">
        @csrf
        <center>
        <div class="form-group">
            <label for="car_id"></label>
            <input style="text-align:center" type="text" name="car_id" placeholder="ทะเบียนรถ" value="{{$car->car_id}}">
        </div>
        @error('car_id')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="model"></label>
            <input style="text-align:center" type="text" name="model" placeholder="รุ่นรถ" value="{{$car->model}}">
        </div>
        @error('model')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="brand"></label>
            <input style="text-align:center" type="text" name="brand" placeholder="แบรนด์รถ" value="{{$car->brand}}">
        </div>
        @error('brand')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="chassis"></label>
            <input style="text-align:center" type="text" name="chassis" placeholder="เลขคัสซี" value="{{$car->chassis}}">
        </div>
        @error('chassis')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="color"></label>
            <input style="text-align:center" type="text" name="color" placeholder="สีรถ" value="{{$car->color}}">
        </div>
        @error('color')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="ownerName"></label>
            <input style="text-align:center" type="text" name="ownerName" placeholder="ขื่อเจ้าของรถ" value="{{$car->ownerName}}">
        </div>
        @error('ownerName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="ownerLastName"></label>
            <input style="text-align:center" type="text" name="ownerLastName" placeholder="นามสกุลเจ้าของรถ" value="{{$car->ownerLastName}}">
        </div>
        @error('ownerLastName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="ownerNumber"></label>
            <input style="text-align:center" type="text" name="ownerNumber" placeholder="เบอร์โทรศัพท์เจ้าของรถ" value="{{$car->ownerNumber}}">
        </div>
        @error('ownerNumber')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        </center>
    </div>
    <div class="d-flex flex-row justify-content-center" style="gap:20px">
        <a href="/car" class="btn btn-danger" style="width:70px; height:38px;"> ยกเลิก</a> 
        <input type="submit" value="แก้ไข" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form>
    
@endsection