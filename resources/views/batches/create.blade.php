@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> batches</div>
  <div class="card-body">
      
      <form action="{{ url('batches ') }}" method="post">
        {!! csrf_field() !!}
        <label>اسم الحزمة</label></br>
        <input type="text" name="name" id="name" class="form-control" autocomplete="off"></br>

        <label>  اسم الدرس </label></br>
        
    <select name="cource_id" id="cource_id"class="form-control">
@foreach($courses as $id => $name)
<option value="{{$id}}">{{$name}}</option>
@endforeach
    </select>
    
</br>  <label>تاريخ البدء</label></br>
        <input type="date" name="start_date" id="start_date" class="form-control" autocomplete="off"></br>
      
      

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop