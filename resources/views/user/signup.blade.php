@include('layouts.master')
<div class='container' id='custregister'>
<div class="card push-top">
  <div class="card-header">
  <h3>Welcome to Test Website</h3>
  <h5>Register to Test Website:</h5>
  </div>

  <div class="card-body">
    @if ($errors->any())
    <h1>Sign Up</h1>
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
      
    @endif
      <form method="uform" action="#" enctype ="multipart/form-data">
        @csrf
          <div class="form-group">
              @csrf
              <label for="fname">First Name</label>
              <input type="text" class="form-control" name="fname" id="fname"/>
          </div>
          <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname"/>
          </div>

          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" id="phone"/>
          </div>

          <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address"/>
          </div>

          <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city" id="city"/>
          </div>

          <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" class="form-control">
          </div>

          <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="form-control">
          </div>

          <div class="form-group">
                <label for="image">Upload Photo: </label>
                <input type="file" name="customer_image" id="customer_image" class="form-control">
          </div>
          <!-- submitting the form -->
          <button id="userSubmit" type="submit" class="btn btn-primary">Save</button>
             <!-- <button type="submit" class="btn btn-block btn-danger">Register</button> -->
      </form>
  </div>
</div>
</div>
