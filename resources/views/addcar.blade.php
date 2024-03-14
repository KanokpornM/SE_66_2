@extends('layout')
@section('title', 'addcar')

@section('content')
    <h2 >เพิ่มข้อมูลรถ</h2>

    <form method="POST" action="/insert">
        @csrf
        <center>
        <div class="form-group">
            <label for="car_id"></label>
            <input style="text-align:center" type="text" name="car_id" placeholder="ทะเบียนรถ">
        </div>
        @error('car_id')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="model"></label>
            <input style="text-align:center" type="text" name="model" placeholder="รุ่นรถ">
        </div>
        @error('model')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="brand"></label>
            <input style="text-align:center" type="text" name="brand" placeholder="แบรนด์รถ">
        </div>
        @error('brand')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="chassis"></label>
            <input style="text-align:center" type="text" name="chassis" placeholder="เลขคัสซี">
        </div>
        @error('chassis')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="color"></label>
            <input style="text-align:center" type="text" name="color" placeholder="สีรถ">
        </div>
        @error('color')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

         <div class="form-group">
            <label for="year"></label>
            <input style="text-align:center" type="text" name="year" placeholder="ปีของรถ">
        </div>
        @error('year')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="ownerName"></label>
            <input style="text-align:center" type="text" name="ownerName" placeholder="ชื่อเจ้าของรถ">
        </div>
        @error('ownerName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
         @enderror
         <br>

        <div class="form-group">
            <label for="ownerLastName"></label>
            <input style="text-align:center" type="text" name="ownerLastName" placeholder="นามสกุลเจ้าของรถ">
        </div>
        @error('ownerLastName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br>

        <div class="form-group">
            <label for="ownerNumber"></label>
            <input style="text-align:center" type="text" name="ownerNumber" placeholder="เบอร์โทรศัพท์เจ้าของรถ">
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
        <input type="submit" value="เพิ่ม" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form>
    
@endsection