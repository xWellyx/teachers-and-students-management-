@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">معلومات الدفع</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title"> رقم التسجيل : {{ $payments->enrollment->enroll_no }}</h5>
        <p class="card-text">تاريخ الدفع : {{ $payments->paid_date }}</p>
        <p class="card-text">الكمية : {{ $payments->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection