<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <title>student managment system</title>

         <style>


.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}


@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}



         </style>

             </head>
               <body>
                <div class="container">

      <div class="row">
         <div class="col-md-12">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container-fluid">
                <a class="navbar-brand" href="#"><h2> مشروع ادارة المعلمين والطلاب</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
              </nav>
          </div>
      </div>

              <div class="row">
                <div class="col-md-3">
                <div class="sidebar">
                  <a class="active" href="{{url('/homepage')}}">الرئيسية</a>
                    <a href="{{url('/students')}}">الطلاب</a>
                    <a href="{{url('/teachers')}}">المعلم</a>
                    <a href="{{url('/cources')}}">الدروس</a>
                    <a href="{{url('/batches')}}">الحزم</a>
                    <a href="{{url('/enrollments')}}">التسجيل</a>
                    <a href="{{url('/payments')}}">المدفوعات</a>
                </div>

      </div>
      <div class="col-md-9">

   
      @yield('content')

       
    </div>



</body>
</html>