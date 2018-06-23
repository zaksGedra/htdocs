
@extends('layout/default')

@section('content')

@if(session('error') )
{{ session('error')}}
@endif




<div class="container">
  <form method="post">  
    <style>

    form{
      display: block;
      margin-top: 20px;
      margin-left: 35%;

    }
p{
  position: relative;
  left:270px;

}
body{
  background-color: black;
}
label{
  color: orange;
}




  </style>

  @csrf
  <div class="form-group col-lg-6">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">Hello music lover</small>
  </div>
  <div class="form-group col-lg-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
<!--   <div class="form-check col-lg-6">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <p>
  <button type="submit" class="btn btn-primary btn-outline-warning">Submit</button>
</p>
</form>
</div>



@endsection