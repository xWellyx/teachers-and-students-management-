@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> تعديل البيانات</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
      
      
      <label>معرف التسجيل</label></br>
        <input type="number" name="enrollment_id" id="enrollment_id" value="{{$payments->enrollment_id}}" id="id"></br>
        
        <label>تاريخ الدفع</label></br>
        <input type="date" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>
        <label>الكمية</label></br>
        <input type="number" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        <input type="submit" value="تعديل" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop