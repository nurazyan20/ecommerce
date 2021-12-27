{{View::make('title')}}

{{View::make('menu')}}<br><br><br>

<h3><caption-top><center>Register Page</caption-top></center></h3></br>

<div class="container">
<div class="card">
<div class="card-header">
    Please enter your full name, email and password 
  </div>
<div class="card-body">
<form action="register" method="post">
@csrf
<div class="mb-3">
    <label for="exampleInputName1" class="form-label">*Full Name (Required)</label>
    <input type="text" class="form-control" name="fullname" id="exampleInputName1" aria-describedby="nameHelp" required placeholder="Please enter full name">
    <div id="nameHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">*Email address (Required)</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Please enter email address">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">*Password (Required)</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required placeholder="Please enter password">
  </div>
  <button onclick="myFunction()" type="submit" class="btn btn-dark">Register</button>
  <a href="/login" class="btn btn-info" role="button">Already has an account?</a>
  <a href="/login" class="btn btn-secondary" role="button">Home</a>
</form>
</div>
</div>
</div>

<script>
function myFunction() {
  alert("Successfully register!");
}
</script>

