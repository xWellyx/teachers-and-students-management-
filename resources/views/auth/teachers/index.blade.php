@extends('layout')
@section('content')
    
 
           
                <div class="card">
                    <div class="card-header">
                        <h2>معلومات المعلمين</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> اضافة معلم جديد
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>العنوان</th>
                                        <th>الجوال</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>
                                            <a href="{{ url('/teachers/' . $item->id) }}" title="View teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> عرض</button></a>
                                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> تعديل</button></a>
 
                                            <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" "return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" aria-hidden="true"></i> حذف</button>
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