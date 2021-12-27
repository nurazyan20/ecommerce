@extends('header')
@section('login')<br><br>

<h3><caption-top><center>Login Page</caption-top></center></h3></br>

<div class="container">
<div class="card">
<div class="card-header">
    Please enter your email and password 
  </div>
<div class="card-body">
<form action="login" method="post">
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">*Email address (Required)</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" required placeholder="Please enter your email address">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">*Password (Required)</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required placeholder="Please enter your password">
  </div>
  <button onclick="myFunction()" type="submit" href="/home" class="btn btn-dark">Login</button>
  <a href="/register" class="btn btn-info" role="button">Register an account</a>
  <a href="/login" class="btn btn-secondary" role="button">Home</a>
</form>
</div>
</div>
</div>

<script>
function myFunction() {
  alert("Successfully login!");
}
</script>

@endsection