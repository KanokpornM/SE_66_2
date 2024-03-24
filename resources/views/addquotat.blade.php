@extends('layout')
@section('title', 'addquotat')

<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>เพิ่มรายการ</h2>
    
    <form method="POST" action="/insertquotat">
      @csrf  
      <center>
        <div class="form-group">
            <label for="quotation_id"></label>
            <input  class="w-25" style="text-align:center" type="text" name="quotation_id" placeholder="อาการ">
        </div>
        @error('quotation_id')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br> 
        <div class="form-group">
          <label for="carR_id"></label>
          <input  class="w-25" style="text-align:center" type="text" name="carR_id" placeholder="อะไหล่">
        </div>
      @error('carR_id')
          <div style="color:red">
              <span>{{$message}}</span>
          </div>
      @enderror
      <br> 

        <div class="form-group">
            <label for="detail"></label>
            <input  class="w-25" style="text-align:center" type="text" name="detail" placeholder="รายละเอียดรายการ">
        </div>
        @error('detail')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
     @enderror
     <br> 

      <div class="form-group">
        <label for="status"></label>
        <input class="w-25" style="text-align:center" type="text" name="status" placeholder="จำนวน">
      </div>
    @error('status')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
    @enderror
        <br>


    <br>
    </center>
    </div>
    <div class="d-flex flex-row justify-content-center" style="gap:20px">
          <a href="/quotat" class="btn btn-danger" style="width:70px; height:38px;"> ยกเลิก</a> 
          <input type="submit" value="เพิ่ม" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form> 
@endsection
