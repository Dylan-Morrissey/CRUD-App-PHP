<?php require 'users.php';
$users = getUsers();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD app</title>
  </head>
  <header>

  </header>

  <body>
    <table>
      <thead>
        <th>Name </th>
        <th>Username </th>
        <th>Email address </th>
        <th>Phone Number </th>
        <th>website </th>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
          <td><?php echo $user["name"]; ?></td>
          <td><?php echo $user['username']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><?php echo $user['phone']; ?></td>
          <td><?php echo $user['website']; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

  </body>

  <footer>

  </footer>

</html>
