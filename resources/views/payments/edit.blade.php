@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Edit form    </div>
    <div class="card-body">

    <form action="{{ url('payments/' .$payments->id)}}" method="post">
        {!!csrf_field() !!}
        @method("PATCH")
    <!--       <label>Id</label>
      <input type="text" name="id" id="id" value="{{$batches->id}}"class="form-control"><br/>   -->
      
        <label>Enrollment No</label>
        <select name ="enrollment_id" id = "enrollment_id" class = "form control">
            @foreach($payments as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no }} </option>
            @endforeach
        </select><br/><br/>

        <input type="text" name="enroll_no" id="enroll_no"  value="{{$payments->enrollment->enroll_no}}" class="form-control"><br/>
     <label>Paid date  </label><br> 
         <input type="text" name="start_date" id="start_date" value="{{$payments->paid_date}}" class="form-control"><br/>
      <label> Amount </label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"><br/>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop