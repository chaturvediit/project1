@include('layout.header')


<div class="container">
   
    

  
  
    <form action="{{url('/loginuser')}}" method="post">
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
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        @error('password')
      <span class="text-danger">{{ $message }}</span>
       @enderror
      </div>
      </div>
     

  </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>












<!-- <div class="container">
@yield('main-section')

</div> -->

@include('layout.footer')