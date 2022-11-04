<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fashion PH</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <!-- <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
      <li><a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>About Us</a></li>
      <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Customer</a></li>
      <li><a href="#"><i class="fa fa-address-card" aria-hidden="true"></i>Employee</a></li>
      <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Services</a></li>
      <li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i>Products</a></li> -->
      <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>

      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
          aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
          <ul class="dropdown-menu">
            @if (Auth::check())
              <li><i class="fa fa-user" aria-hidden="true"><a href="#">User Profile</a></i></li>
              <li role="separator" class="divider"></li>
              <li><i class="fa fa-sign-out" aria-hidden="true"><a href="#">Logout</a></i></li>
              @else
              <li><i class="fa fa-user-plus" aria-hidden="true"><a href="#"></i>Customer Signup</a></li>
              <li><i class="fa fa-user-plus" aria-hidden="true"><a href="#"></i>Employee Signup</a></li>
              <li><i class="fa fa-sign-in" aria-hidden="true"><a href="#"></i>Signin</a></li>
            @endif
          </ul>
        </li>

      </ul>
</div> 
</nav>
