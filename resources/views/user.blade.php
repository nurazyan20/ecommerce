<br><br>

<center><h2>Welcome {{session()->get('user')->name}} ! </h2><br><br>

<div class="container">
<table class="table table-hover table-bordered"><br>
  <h4><caption-top><center>Account Detail</caption-top></center></h4></br>
    <tr style="text-align:center;">
    <th>Id</th>
    <td>{{session()->get('user')->id}}</td>
  </tr>
  <tr style="text-align:center;">
    <th>Email</th>
    <td>{{session()->get('user')->email}}</td>
  </tr>
  <tr style="text-align:center;">
    <th>Name</th>
    <td>{{session()->get('user')->name}}</td>
  </tr>
  <tr style="text-align:center;">
    <th>Password</th>
    <td>{{session()->get('user')->password}}</td>
  </tr>
  <tr style="text-align:center;">
    <th>Created At</th>
    <td>{{session()->get('user')->created_at}}</td>
  </tr>
</table>
</div><br><br>
<a type="button" href="/userget?rid={{session()->get('user')->id}}" class="btn btn-warning">Edit Profile</a>
<a href="/logout" onclick="myFunction()" class="btn btn-dark">Log Out</a>



<script>
function myFunction() {
  alert("Successfully log out!");
}
</script>


</div>

