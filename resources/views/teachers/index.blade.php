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
                                        <a href="{{ url('/teachers/' . $item->id) }}" title="View cource"><i class="bi bi-info-square"></i></a> 
                                            
                                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit cource"><i class="bi bi-pencil-square"></i></a>
</a>
 
                                            <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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