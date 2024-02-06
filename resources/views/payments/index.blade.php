@extends('layout')
@section('content')
    
 
           
                <div class="card">
                    <div class="card-header">
                        <h2>معلومات الدفع</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> اضافة جديد
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>رقم التسجيل</th>
                                        <th>تاريخ الدفع</th>  
                                        <th>الكمية </th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enrollment->enroll_no}}</td>
                                        <td>{{ $item->paid_date }}</td>
                                        <td>{{ $item->amount }}</td>
                                        
 
                                        <td>
                                        <a href="{{ url('/payments/' . $item->id) }}" title="View payment"><i class="bi bi-info-square"></i></a> 
                                            
                                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit payment"><i class="bi bi-pencil-square"></i></a>
</a>

                                        <a href="{{ url('report/report1/' . $item->id ) }}" title="print payment"><i class="bi bi-patch-check"></i></a> 

                                        <a href="{{ url('recipt/recipt1/' . $item->id ) }}" title="print payment"><i class="bi bi-printer"></i></a>

                                            <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button  style="  border-style: none;" type="submit"  title="Delete payment" "return confirm('Are you sure you want to delete this item?');"><i class="bi bi-x-square"></i>
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