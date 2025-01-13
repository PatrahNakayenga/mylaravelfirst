@extends('layout')
@section('content')
  
            <div class="card">
                <div class="card-header">
                    <h2>Teachers Application</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/teachers/create')}}" class="btn btn-success btn-sm" title="Add New student">
                        <i class="fa fa-plus" aria-hiddden="true"></i>   Add new 
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>address</th>
                                    <th>mobile</th>
                                    <th>age</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teachers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>
                                        <a href="{{ url('/teachers/' . $item->id) }}" title="View teachers"><button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit teachers"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                                                <form method="POST" action="{{ url('/teachers/' . '/' .$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{csrf_field() }}

                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete teachers" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></a> Delete </button>

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
