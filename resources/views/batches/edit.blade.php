@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Edit form    </div>
    <div class="card-body">

    <form action="{{ url('batches/' .$batches->id)}}" method="post">
        {!!csrf_field() !!}
        @method("PATCH")
        <label>Id</label>
       <input type="text" name="id" id="id" value="{{$batches->id}}"class="form-control"><br/>
        <label>address</label><br/>  
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$batches->name}}"class="form-control"><br/>
        <label>syllabus</label><br/>
        <input type="text" name="course_id" id="course_id"  value="{{$batches->course->name}}" class="form-control"><br/>
     <label>Duration  </label><br> 
         <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control"><br/>
      <!--  <label> Age </label></br>
        <input type="text" name="age" id="age" value="{{$batches->age}}" class="form-control"><br/>-->
        <input type="submit" value="Update" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop