@extends('layout')
@section('title', 'addcarrevice')

<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>เพิ่มข้อมูลรับรถ</h2>
    
    <form method="POST" action="{{route('insertcarrecive')}}">
      @csrf  
      <center>
        <div class="form-group">
            <label for="customerName"></label>
            <input  class="w-25" style="text-align:center" type="text" name="customerName" placeholder="ชื่อ">
        </div>
        @error('customerName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br> 
        <div class="form-group">
          <label for="customerLastName"></label>
          <input  class="w-25" style="text-align:center" type="text" name="customerLastName" placeholder="นามสกุล">
        </div>
      @error('customerLastName')
          <div style="color:red">
              <span>{{$message}}</span>
          </div>
      @enderror
      <br> 
      <div class="form-group">
        <label for="customerPhone"></label>
        <input class="w-25" style="text-align:center" type="text" name="customerPhone" placeholder="เบอร์">
      </div>
    @error('customerPhone')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
    @enderror
    
    <br> 
    <div class="form-group">
      <input class="w-25" type="date" name="date">
    </div>
    @error('date')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
    @enderror
    <br> 

    <select class="form-select w-25" name="car_id" aria-label="Default select example" >
      <option selected hidden>Open this select Car ID</option>
      @foreach ($carList as $item)
      <option value="{{$item->car_id}}">{{$item->car_id}}</option>
      @endforeach
    </select>


    <br>
    </center>
    </div>
    <div class="d-flex flex-row justify-content-center" style="gap:20px">
          <a href="/carrecive" class="btn btn-danger" style="width:70px; height:38px;"> ยกเลิก</a> 
          <input type="submit" value="เพิ่ม" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form> 
@endsection
