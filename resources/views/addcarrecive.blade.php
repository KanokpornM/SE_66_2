@extends('layout')
@section('title', 'addcarrevice')
@section('searchBar','none')
<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>เพิ่มข้อมูลรับรถ</h2>
    
    <form method="POST" action="/insertcarrecive">
      @csrf  
      <center>
        <div class="form-group">
            <label for="customerName"></label>
            <input style="text-align:center" type="text" name="customerName" placeholder="ชื่อ">
        </div>
        @error('customerName')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br> 
        <div class="form-group">
          <label for="customerLastName"></label>
          <input style="text-align:center" type="text" name="customerLastName" placeholder="นามสกุล">
        </div>
      @error('customerLastName')
          <div style="color:red">
              <span>{{$message}}</span>
          </div>
      @enderror
      <br> 
      <div class="form-group">
        <label for="customerPhone"></label>
        <input style="text-align:center" type="text" name="customerPhone" placeholder="เบอร์">
      </div>
    @error('customerPhone')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
    @enderror
    <br> 
    <div class="form-group">
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    </div>

    <br>
    </center>
    </div>
    <div class="d-flex flex-row justify-content-center" style="gap:20px">
          <a href="/carrecive" class="btn btn-danger" style="width:70px; height:38px;"> ยกเลิก</a> 
          <input type="submit" value="เพิ่ม" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form> 
@endsection
