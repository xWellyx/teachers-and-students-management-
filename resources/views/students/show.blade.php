@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">معلومات الطلاب</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">الاسم : {{ $students->name }}</h5>
        <p class="card-text">العنوان : {{ $students->address }}</p>
        <p class="card-text">الجوال : {{ $students->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection