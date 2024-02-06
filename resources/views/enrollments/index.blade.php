@extends('layout')
@section('content')
    
 
           
                <div class="card">
                    <div class="card-header">
                        <h2>معلومات التسجيل</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> اضافة تسجيل جديد
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>المعرف</th>
                                        <th>رقم التسجيل</th>
                                        <th>  اسم الحزمة</th>
                                        <th>اسم الطالب</th>
                                        <th> تاريخ الانضمام</th>
                                        <th>fee</th>

                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                         <td>{{ $item->id }}</td>
                                        <td>{{ $item->enroll_no }}</td>
                                        <td>{{ $item->batch->name }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
 
                                        <td>
                                        <a href="{{ url('/enrollments/' . $item->id) }}" title="View cource"><i class="bi bi-info-square"></i></a> 
                                            
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit cource"><i class="bi bi-pencil-square"></i></a>
</a>
 
                                            <form method="POST" action="{{ url('/enrollments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button  style="  border-style: none;" type="submit"  title="Delete cource" "return confirm('Are you sure you want to delete this item?');"><i class="bi bi-x-square"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>

@endsection