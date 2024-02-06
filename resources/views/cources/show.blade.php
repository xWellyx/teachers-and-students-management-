@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"> معلومات الدروس</div>
  <div class="card-body">
  
 
 
        <div class="card-body">
        <h5 class="card-title">اسم الدرس  : {{ $cources->name }}</h5>
        <p class="card-text">المنهج : {{ $cources->syllabus }}</p>
        <p class="card-text">المدة  : {{ $cources->duration()}}</p>
        <iframe height="250" width="450"
            src="{{ $cources->video }}" allowfullscreen>
      </iframe>
     

  </div>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection 