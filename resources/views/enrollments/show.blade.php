@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">معلومات الطلاب</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">رقم التسجيل : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">الرقم التعريفي للحزمة : {{ $enrollments->batch_id }}</p>
        <p class="card-text">اسم الطالب: {{ $enrollments->student_id }}</p>
        <p class="card-text">تاريخ الانضمام  : {{ $enrollments->joind_date }}</p>
        <p class="card-text">fee : {{ $enrollments->fee }}</p>

       
  </div>
       
    </hr>
  
  </div>
</div>
@endsection
