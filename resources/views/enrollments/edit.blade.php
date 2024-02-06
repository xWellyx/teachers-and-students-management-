@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header"> تعديل البيانات</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label> رقم التسجيل</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{$enrollments->enroll_no}}"></br>

        <label> الرقم التعريفي للحزمة </label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{$enrollments->batch_id}}"></br>

        <label>معرف الطالب</label></br>
       <input type="text" name="student_id" id="student_id" class="form-control" value="{{$enrollments->student_id}}"></br>


        <label>تاريخ الانضمام</label></br>
        <input type="date" name="joind_date" id="joind_date" class="form-control" value="{{$enrollments->joind_date}}"></br>


        <label>fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{$enrollments->fee}}"></br>

        <input type="submit" value="تعديل" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop