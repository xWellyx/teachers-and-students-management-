@extends('layout')
@section('content')
    
 
           
                <div class="card">
                    <div class="card-header">
                        <h2>معلومات الحزم</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/batches/create') }}" class="btn btn-success btn-sm" title="Add New batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> اضافة حزمة جديدة
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                      
                                        <th>المعرف </th>
                                        <th>اسم الحزمة </th>
                                        <th>اسم الدرس</th>
                                        <th>معرف الدرس </th>
                                        <th>تاريخ البدء</th>
                                      
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                   

                                @foreach($batches as $item)
                                    <tr>
                                      
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->cource->name }}</td>
                                        <td>{{ $item->cource_id }}</td>
                                        <td>{{ $item->start_date }}</td>
                                       
                                        
                                       
                                   
                                       
                                       </td> 
                                    

                                      <td> 

                                      <a href="{{ url('/batches/' . $item->id) }}" title="View cource"><i class="bi bi-info-square"></i></a> 
                                            
                                            <a href="{{ url('/batches/' . $item->id . '/edit') }}" title="Edit cource"><i class="bi bi-pencil-square"></i></a>
</a>
 
                                            <form method="POST" action="{{ url('/batches' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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