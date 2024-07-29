@include('layout.header')


<div class="container">
   
    

  
  
    <form action="{{url('/user-insert')}}" method="post">
    <div class="row">
      <div class="col-sm-6">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" value="">
        @error('name')
      <span class="text-danger">{{ $message }}</span>
       @enderror
      </div>
      </div>
      <div class="col-sm-6">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="">
        @error('email')
      <span class="text-danger">{{ $message }}</span>
       @enderror
       
      </div>
      </div>
     
      <div class="col-sm-6">
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        @error('password')
      <span class="text-danger">{{ $message }}</span>
       @enderror
      </div>
      </div>
     
     
      <div class="col-sm-6">
      <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" id="cpwd" placeholder="Enter Confirm password" name="password_confirmation">
        @error('password')
      <span class="text-danger">{{ $message }}</span>
       @enderror
      </div>
      </div>
   
      <div class="col-sm-6">
      <div class="form-group">
        <label for="pwd">Dob:</label>
        
        <input type="date" class="form-control" id="dob" placeholder="Ente D-O-B" name="dob" value="">
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



<!-- <div class="container">
@yield('main-section')

</div> -->

@include('layout.footer')