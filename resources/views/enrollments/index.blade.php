@extends('layout')
@section('content')
  
            <div class="card">
                <div class="card-header">
                    <h2>Student Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/enrollments/create')}}" class="btn btn-success btn-sm" title="Add New student">
                        <i class="fa fa-plus" aria-hiddden="true"></i>   Add new 
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course Id</th>
                                    <th>enroll_no</th>
                                    <th>batch_id</th>
                                    <th>student_id</th>
                                    <th>join_date</th>
                                    <th>fee</th>

                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enrollments as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->enroll_no }}</td>
                                    <td>{{ $item->batch->name }}</td>
                                    <td>{{ $item->student->name }}</td>
                                    <td>{{ $item->join_date }}</td>
                                    <td>{{ $item->fee }}</td>



                                  
                                    <td>
                                        <a href="{{ url('/enrollments/' . $item->id) }}" title="View enrollments"><button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit enrollments"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                                                <form method="POST" action="{{ url('/enrollments' . '/' .$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{csrf_field() }}

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></a> Delete </button>

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
