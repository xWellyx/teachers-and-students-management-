@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"> معلومات batches</div>
  <div class="card-body">
  
 
 
        <div class="card-body">
        <h5 class="card-title">اسم الحزمة  : {{ $batches->name }}</h5>
        <p class="card-text">معرف الدرس    : {{ $batches->cource_id }}</p>
        <p class="card-text">تاريخ البدء : {{ $batches->start_date }}</p>
     
     

  </div>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection 