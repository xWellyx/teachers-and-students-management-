@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> تعديل البيانات</div>
  <div class="card-body">
      
      <form action="{{ url('cources/' .$cources->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cources->id}}" id="id" autocomplete="off"/>

        <label>اسم الدرس</label></br>
        <input type="text" name="name" id="name" value="{{$cources->name}}" class="form-control" autocomplete="off"></br>
      
        <label>المنهج</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$cources->syllabus}}" class="form-control" autocomplete="off" ></br>
       
        <label>مدة الدرس</label></br>
        <input type="text" name="duration" id="duration" value="{{$cources->duration}}" class="form-control" autocomplete="off" ></br>
        
        <label>رابط الدرس</label></br>
        <input type="text" name="video" id="video" value="{{$cources->video}}" class="form-control" autocomplete="off"></br>
        <input type="submit" value="تعديل" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop