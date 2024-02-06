@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">معلومات المعلمين</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">الاسم : {{ $teachers->name }}</h5>
        <p class="card-text">العنوان : {{ $teachers->address }}</p>
        <p class="card-text">الجوال : {{ $teachers->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection