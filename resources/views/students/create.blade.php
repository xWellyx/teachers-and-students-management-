@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> اضافة الطلاب</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>الاسم</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>العنوان</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>الجوال</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop