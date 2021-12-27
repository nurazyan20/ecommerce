{{View::make('title')}}

{{View::make('menu')}}<br>

<?php 

     $conn = new mysqli('localhost', 'root', '', 'ecommerce');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM users WHERE name OR email LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM users";
     $result = $conn->query($sql);
?>

<div class="container">
<table class="table table-hover table-bordered"><br>
  <h3><caption-top><center>List of Users</caption-top></center></h3></br>
  <thead class="table-dark">
    <tr style="text-align:center;">
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Full Name</th>
      <th scope="col">Password</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr style="text-align:center;">
  <td><?php echo $row->id ?></td>
     <td><?php echo $row->email ?></td>
     <td><?php echo $row->name ?></td>
     <td><?php echo $row->password ?></td>
     <td><?php echo $row->created_at ?></td>
      <td>
      <a href="/userdelete?rid={{ $row->id }}">
      <img src="/images/icon/delete.png" title="Delete"></a> &nbsp;
      <a href="/userget?rid={{ $row->id }}">
      <img src="/images/icon/edit.png" title="Edit"></a>
      </td>  
    </tr>
  </tbody>
  <?php endwhile; ?>

</table>
</div>

