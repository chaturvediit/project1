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
  <h2>Small Table</h2>
  <p>The .table-sm class makes the table smaller by cutting cell padding in half:</p>

  <a href="{{url('/form')}}" class="btn btn-info" role="button" style="float: right;">Back to Form</a>
  <table class="table table-bordered table-sm">
    <thead>
      <!-- echo"<pre>";
      {{print_r($Customer)}} -->


      
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Dob</th>
        <th>State</th>
        <th>Contry</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($Customer as $row)

      <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['email']}}</td>
        <td>
        @if($row['gender']=='M')
         <spane>Male</span>
         @elseif($row['gender']=='F')
         <spane>Female</span>
         @else
         <spane>Other</span>
          @endif
        
         
        </td>
        <td>{{$row['address']}}</td>
        <td>{{$row['dob']}}</td>
        <td>{{$row['state']}}</td>
        <td>{{$row['country']}}</td>
        <td>
         @if($row['status']==1)
         <span class="badge badge-success">Active</span>
         @else
         <span class="badge badge-danger">InActive</span>
          @endif

        </td>
        <td><a href="{{url('/del')}}/{{$row['customers_id']}}"><button type="button" class="btn btn-danger">Delete</button></a>
        <a href="{{route('edit.customer',['id'=>$row['customers_id']])}}"><button type="button" class="btn btn-info">Edit</button></a>
      </td>
        
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
