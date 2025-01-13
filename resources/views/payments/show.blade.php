@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">PAYMENT Details
    </div>
    <div class="card-body">
        <div class="card-body">
          
            <p class="card text" >Enrollment No : {{ $payments->enrollment->enroll_no}}</p>
            <p class="card text"> Paid Date : {{ $payments->paid_date}}</p>
            <p class="card text"> Amount : {{ $payments->amount}}</p>

           

        </div>
</hr>
    </div>
</div>

@endsection