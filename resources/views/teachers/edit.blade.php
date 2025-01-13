@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Edit form    </div>
    <div class="card-body">

    <form action="{{ url('teachers/' .$teachers->id)}}" method="post">
        {!!csrf_field() !!}
        @method("PATCH")
        <label>Name</label>
        <input type="text" name="name" id="name" value="{{$teachers->id}}"class="form-control"><br/>
        <label>address</label><br/>
        <input type="text" name="address" id="address"  value="{{$teachers->address}}" class="form-control"><br/>
     <label>Mobile  </label><br> 
         <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"><br/>
        <label> Age </label></br>
        <input type="text" name="age" id="age" value="{{$teachers->age}}" class="form-control"><br/>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop