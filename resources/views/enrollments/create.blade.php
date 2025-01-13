@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Enrollment apply  </div>
    <div class="card-body">

    <form action="{{ url('enrollments')}}" method="post">
        {!!csrf_field() !!}
        <label>enroll_no</label>
        <input type="text" name="enroll_no" id="enroll_no"class="form-control"><br/>
        <label>Abatch_id</label><br/>
        <input type="text" name="batch_id" id="batch_id"   class="form-control"><br/>
     <label>studentid </label><br> 
         <input type="text" name="student_id" id="student_id"class="form-control"><br/>
      <label> join_date </label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"><br/>
        
        <label> fee </label></br>
        <input type="text" name="fee" id="fee" class="form-control"><br/>   

        <input type="submit" value="Save" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop