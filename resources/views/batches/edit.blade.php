@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> تعديل البيانات</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" autocomplete="off"/>

        <label>اسم الحزمة</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control" autocomplete="off"></br>
      
        <label>معرف الدرس </label></br>
          
        <input type="text" name="cource_id" id="cource_id" value="{{$batches->cource_id}}" class="form-control" autocomplete="off" ></br>
       
        <label>تاريخ البدء</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control" autocomplete="off" ></br>
        
        
        <input type="submit" value="تعديل" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop