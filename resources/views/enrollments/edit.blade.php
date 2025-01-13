@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Edit form    </div>
    <div class="card-body">

    <form action="{{ url('enrollments/' .$enrollments->id)}}" method="post">
        {!!csrf_field() !!}
        @method("PATCH")
        <label>Id</label>
       <input type="text" name="id" id="id" value="{{$enrollments->id}}"class="form-control"><br/>
        <label>address</label><br/>  
        <label>Name</label>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollments->enroll_no}}"class="form-control"><br/>
        <label>batch_id</label><br/>
        <input type="text" name="batch_id" id="batch_id"  value="{{$enrollments->batch_id}}" class="form-control"><br/>
     <label>student_id  </label><br> 
         <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"><br/>
   <label> join_date </label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"><br/>
        <label> fee </label></br>
        <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"><br/>

        <input type="submit" value="Update" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop