@extends('layout')
@section('content')
   


<form style="padding:30px;">
<tr>
  <div class="row">
    <th> <div class="col-md-3">
       <div class="card card-body bg-primary  text-white mb-3">
        <label> مجموع الطلاب</label>
        <h1>{{ $totalstudent }}</h1>
            <a href="{{ url('/students') }}" class="text-white">عرض</a>
        </div></th>

        <th>    <div class="card card-body bg-primary  text-white mb-3">
                <label> مجموع المعلمين</label>
            <h1>{{ $totalTeacher }}</h1>
        <a href="{{ url('/teachers') }}" class="text-white">عرض</a>
    </div></th>

    <th>   <div class="card card-body bg-primary  text-white mb-3">
                <label> مجموع الدروس</label>
            <h1>{{ $totalCource }}</h1>
        <a href="{{ url('/cources') }}" class="text-white">عرض</a>
    </div></th>

    <th>  <div class="card card-body bg-primary  text-white mb-3">
                <label> مجموع الحزم</label>
            <h1>{{ $totalBatch }}</h1>
        <a href="{{ url('/batches') }}" class="text-white">عرض</a>
    </div> </th>

    <th>  <div class="card card-body bg-primary  text-white mb-3">
                <label> مجموع التسجيل</label>
            <h1>{{ $totalBatch }}</h1>
        <a href="{{ url('/enrollments') }}" class="text-white">عرض</a>
    </div> </th>

    <th>  <div class="card card-body bg-primary  text-white mb-3">
                <label> مجموع المدفوعات</label>
            <h1>{{ $totalPayment }}</h1>
        <a href="{{ url('/payments') }}" class="text-white">عرض</a>
    </div>
  </div> 
</div> </th>

</tr>
</form>
@endsection