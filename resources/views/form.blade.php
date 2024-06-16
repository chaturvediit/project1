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

<div class="container">
  <h2>Stacked form</h2>

  <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->



  <form action="{{url('/form_action')}}" method="post">
  <div class="row">
    <div class="col-sm-6">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="{{ old('name') }}">
      @error('name')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      @error('email')
    <span class="text-danger">{{ $message }}</span>
     @enderror
     
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      @error('pswd')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Enter Confirm password" name="cpswd">
      @error('cpswd')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd">Contry:</label>
      <input type="text" class="form-control" id="contry" placeholder="Enter Contry" name="contry">
      @error('contry')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd">State:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter State" name="state">
      @error('state')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-12">
    <div class="form-group">
      <label for="pwd">Address:</label>
      <textarea class="form-control" rows="2" id="comment" name="address"></textarea>
      <!-- <input type="password" class="form-control" id="state" placeholder="Enter State" name="state"> -->
      @error('address')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <label for="pwd">Gender:</label>
    <div class="form-group">
      <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="M" >Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="F" >Femal
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="O" >Other
  </label>
</div>


      @error('gender')
    <div><span class="text-danger">{{ $message }}</span></div>
     @enderror
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="pwd">Dob:</label>
      
      <input type="date" class="form-control" id="dob" placeholder="Ente D-O-B" name="dob">
      @error('dob')
    <span class="text-danger">{{ $message }}</span>
     @enderror
    </div>
    </div>
  
    <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
