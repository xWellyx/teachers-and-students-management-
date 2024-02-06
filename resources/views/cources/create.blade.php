@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> اضافة الدروس</div>
  <div class="card-body">
      
      <form action="{{ url('cources') }}" method="post">
        {!! csrf_field() !!}
        <label>اسم الدرس</label></br>
        <input type="text" name="name" id="name" class="form-control" autocomplete="off"></br>

        <label>المنهج</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control" autocomplete="off"></br>

        <label>مدة الدرس</label></br>
        <input type="text" name="duration" id="duration" class="form-control" autocomplete="off"></br>
      
        <label>رابط الدرس</label></br>
        <input type="text" name="video" id="video" class="form-control" autocomplete="off"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop