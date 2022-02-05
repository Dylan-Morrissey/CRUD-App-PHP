<?php
require 'users.php';

if (!isset($_GET['id'])) {
  echo "not found";
  exit;
}

$userId = $_GET['id'];
$user = getUserById($userId);

if (!$user) {
  echo "Not Found";
  exit;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="table">Viewing: <?php echo $user['name']?></h3>
        </div>
        <table class="table">
          <tbody>
          <tr>
            <th>Email:</th>
            <td><?php echo $user['email']; ?></td>
          </tr>
          <tr>
            <th>Phone:</th>
            <td><?php echo $user['phone']; ?></td>
          </tr>
          <tr>
            <th>Website:</th>
            <td><a href="http://<?php echo $user['website']; ?>" target="_blank"><?php echo $user['website']; ?></a></td>
          </tr>
          <tr>
            <th>Username:</th>
            <td><?php echo $user['username']; ?></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>



  </body>
</html>
