<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <!-- <a class="nav-link" href="#">Link 1</a> -->
      <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Language
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('/')}}">English</a>
      <a class="dropdown-item" href="{{url('/hi')}}">Hindi</a>
      <a class="dropdown-item" href="{{url('/guj')}}">Gujarati</a>
     
    </div>
  </div>

    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/user-registration')}}">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/user-login')}}">Login</a>
    </li>
  </ul>

</nav>

<div class="container">
@if(session('success'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('success') }}
    </div>
@endif

<div class="jumbotron text-center">
  <h1>@lang('lang.welcome')</h1>
  <p>Resize this responsive page to see the effect!</p> 
  @if($name!='')
  <spane> Date:{{date('d-m-y')}}/{{$name}}</spane>
   {!!$address!!}
  @else
  <spane> Name is Empty</spane>
  @endif
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
