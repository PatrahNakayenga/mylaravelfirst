@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Edit form    </div>
    <div class="card-body">

    <form action="{{ url('students/' .$students->id)}}" method="post">
        {!!csrf_field() !!}
        @method("PATCH")
        <label>Id</label>
        <input type="text" name="id" id="id" value="{{$students->id}}"class="form-control"><br/>
        <label>address</label><br/>
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$students->name}}"class="form-control"><br/>
        <label>address</label><br/>
        <input type="text" name="address" id="address"  value="{{$students->address}}" class="form-control"><br/>
     <label>Mobile  </label><br> 
         <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"><br/>
        <label> Age </label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"><br/>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop