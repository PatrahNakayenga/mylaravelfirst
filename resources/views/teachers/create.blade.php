@extends('layout')
@section('content')

<div class="card">
    <div class="card-header"> Teacher Form      </div>
    <div class="card-body">

    <form action="{{ url('teachers')}}" method="post">
        {!!csrf_field() !!}
        <label>Name</label>
        <input type="text" name="name" id="name"class="form-control"><br/>
        <label>address</label><br/>
        <input type="text" name="address" id="address"   class="form-control"><br/>
     <label>Mobile  </label><br> 
         <input type="text" name="mobile" id="mobile"class="form-control"><br/>
        <label> Age </label></br>
        <input type="text" name="age" id="age" class="form-control"><br/>
        <input type="submit" value="Save" class="btn btn-success"><br>
        <form>
            </div>
            </div>
@stop