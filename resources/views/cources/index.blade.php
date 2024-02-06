@extends('layout')
@section('content')
    
 
           
                <div class="card">
                    <div class="card-header">
                        <h2>معلومات الدروس</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/cources/create') }}" class="btn btn-success btn-sm" title="Add New cource">
                            <i class="fa fa-plus" aria-hidden="true"></i> اضافة درس جديد
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                          
                                        <th style="width: 90px;">المعرف </th>
                                        <th style="width: 150px;">اسم الدرس</th>
                                        <th style="width: 150px;">المنهج</th>
                                        <th style="width: 100px;">المدة</th>
                                        <th> </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                   

                                @foreach($Cources as $item)
                                    <tr>
                                       
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->syllabus }}</td>
                                        <td>{{ $item->duration() }}</td>
                                       
                                       
                                   
                                        <th> <iframe height="100" width="170"
            src="{{ $item->video }}">
      </iframe>
                                       </th> 
                                    

                                      <td> 

                                            <a href="{{ url('/cources/' . $item->id) }}" title="View cource"><i class="bi bi-info-square"></i></a> 
                                            
                                            <a href="{{ url('/cources/' . $item->id . '/edit') }}" title="Edit cource"><i class="bi bi-pencil-square"></i></a>
</a>
 
                                            <form method="POST" action="{{ url('/cources' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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