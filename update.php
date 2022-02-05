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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  updateUser($userId, $_POST);
  header("Location: index.php");
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

    <h3 class="table"><?php echo $user['name']?></h3>
    <form action="" method="POST" enctype="multipart/form-data">
      <table class="table">
        <tbody>
          <tr>
            <th><label for="name">Name: </label></th>
            <td><input name="name"  value="<?php echo $user['name']; ?>"><br><br></td>
          </tr>
          <tr>
            <th><label for="name">Email Address: </label></th>
            <td><input name="email" value="<?php echo $user['email']; ?>"><br><br></td>
          </tr>
          <tr>
            <th><label for="name">Phone: </label></th>
            <td>  <input name="phone" value="<?php echo $user['phone']; ?>"><br><br></td>
          </tr>
          <tr>
            <th><label for="name">Website: </label></th>
            <td>  <input name="website" value="<?php echo $user['website']; ?>"><br><br></td>
          </tr>
          <tr>
            <th><label for="name">Username: </label></th>
            <td>  <input name="username" value="<?php echo $user['username']; ?>"><br><br></td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-success">Save</button>
    </form>
  </body>
</html>
