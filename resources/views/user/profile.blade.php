@extends('layouts.master')
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
  </div>     
@endif
<h3><strong>Welcome to Silicon Valley Online Store</strong></h3>

<div id="customers" class="center">
        <div class="col-md-8 col-md-offset-2">
        <h1><i class="fa fa-address-card" aria-hidden="true"></i>User Profile: {{Auth::user()->name}}</h1>
        <!-- <img class="avatar__image" src="{{ asset($customer->customer_image) }}"> -->
        <div class="container" id="pbody">
            <h3><b>First Name:</b>fname</h3>
            <h3><b>Last Name:</b>lname</h3>
            <h3><b>Phone:</b>phone</h3>
            <h3><b>Address:</b>address</h3>
            <h3><b>City:</b>city</h3>
        </div>

        <!-- <a href="{{ route('customers.edit', $customer->id) }}" class = "btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Edit my Information</a> -->
        </div>
</div>