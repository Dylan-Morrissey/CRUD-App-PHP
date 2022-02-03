<?php require 'users.php';
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD app</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="master.css">
  </head>
  <header>

  </header>

  <body>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col"> Name </th>
          <th scope="col">Username </th>
          <th scope="col">Actions</th>
          <th scope="col">Email address </th>
          <th scope="col">Phone Number </th>
          <th scope="col">Website</th>
          <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user['name']; ?></td>
          <td><?php echo $user['username']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['phone']; ?></td>
          <td><?php echo $user['website']; ?></td>
          <td>
            <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-info">View</a>
            <a href="update.php=<?php echo $user['id'] ?>" class="btn btn-secondary">Update</a>
            <a href="delete.php=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </body>

  <footer>

  </footer>

</html>
