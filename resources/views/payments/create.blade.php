@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> الدفع</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>رقم التسجيل</label></br>

<select name="enrollment_id" id="enrollment_id"class="form-control">
@foreach($enrollments as $id => $enroll_no)
<option value="{{$id}}">{{$enroll_no}}</option>
@endforeach
</select>
</br>

        <label>تاريخ الدفع</label></br>
        <input type="date" name="paid_date" id="paid_date" class="form-control"></br>
      
        <label>الكمية</label></br>
        <input type="number" name="amount" id="amount" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop