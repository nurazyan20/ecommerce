{{View::make('title')}}

{{View::make('menu')}}<br>


<br><br>
<h3><caption-top><center>Edit User Profile</caption-top></center></h3></br>

<div class="container">
<div class="card">
<div class="card-header">
    You can edit your name, email, password
  </div>
<div class="card-body">
<form action="useredit?rid={{Request::get('rid')}}" method="post">
@csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input value="{{ $users->name }}" type="text" class="form-control" name="fullname" id="exampleInputName1" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input value="{{ $users->email }}" type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input value="{{ $users->password }}" type="text" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Created At</label>
    <input value="{{ $users->created_at }}" type="text" class="form-control" name="created_at" id="exampleInputPassword1">
  </div>
  <button onclick="myFunction()" type="submit" class="btn btn-dark">Update</button>
  <a href="/userlist" class="btn btn-secondary" role="button">Back</a>

</form>
</div>
</div>
</div>

<script>
function myFunction() {
  alert("Successfully Updated !");
}
</script>

