<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
    </button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
<tbody>
   
   <?php
    $sql="Select * from office";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['Name'];
            $department=$row['Department'];
            $email=$row['Email'];
            $contact=$row['Contact'];
            $password=$row['Password'];
            echo '<tr>
      <th scope="row">'.$name.'</th>
      <td>'.$department.'</td>
      <td>'.$email.'</td>
      <td>'.$contact.'</td>
      <td>'.$password.'</td>
      <td><button class ="btn btn-primary"> <a href="update.php? updateid='.$contact.'" class="text-light">Update</a></button>
<button class="btn btn-danger"> <a href="delete.php? deleteid='.$name.'"class="text-light">Delete</a></button>
</td>
    </tr>';
    }
}


?>
  </tbody>
</table>
    </div>
</body>
</html>