@extends('layout')
@section('title', 'editquotat')

<!-- hide search bar     -->
@section('searchBar','none')

@section('content')
    <h2>แก้ไขรายการ</h2>
    
    <form method="POST" action="{{route('updatequotat',$quotation->quotation_id)}}">
      @csrf  
      <center>
        <div class="form-group">
            <label for="quotation_id"></label>
            <input  class="w-25" style="text-align:center" type="text" name="quotation_id" placeholder="อาการ" value="{{$quotation->quotation_id}}">
        </div>
        @error('quotation_id')
            <div style="color:red">
                <span>{{$message}}</span>
            </div>
        @enderror
        <br> 
        <div class="form-group">
          <label for="carR_id"></label>
          <input  class="w-25" style="text-align:center" type="text" name="carR_id" placeholder="อะไหล่" value="{{$quotation->carR_id}}">
        </div>
      @error('carR_id')
          <div style="color:red">
              <span>{{$message}}</span>
          </div>
      @enderror
      <br> 

        <div class="form-group">
            <label for="detail"></label>
            <input  class="w-25" style="text-align:center" type="text" name="detail" placeholder="รายละเอียดรายการ" value="{{$quotation->detail}}">
        </div>
        @error('detail')
        <div style="color:red">
            <span>{{$message}}</span>
        </div>
     @enderror
     <br> 

      <div class="form-group">
        <label for="status"></label>
        <input class="w-25" style="text-align:center" type="text" name="status" placeholder="จำนวน" value="{{$quotation->status}}">
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
          <input type="submit" value="แก้ไข" class="btn btn-success" style="width:70px; height:38px;">
    </div>
    </form> 
@endsection