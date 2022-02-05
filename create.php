<?php
require 'users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  createUser($_POST);
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create a new user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h3 class="table">Create new user</h3>
      <form action="" method="POST" enctype="multipart/form-data">
        <table class="table">
          <tbody>
            <tr>
              <th><label for="name">Name: </label></th>
              <td><input name="name"><br><br></td>
            </tr>
            <tr>
              <th><label for="name">Email Address: </label></th>
              <td><input name="email"><br><br></td>
            </tr>
            <tr>
              <th><label for="name">Phone: </label></th>
              <td>  <input name="phone" ><br><br></td>
            </tr>
            <tr>
              <th><label for="name">Website: </label></th>
              <td>  <input name="website" ><br><br></td>
            </tr>
            <tr>
              <th><label for="name">Username: </label></th>
              <td>  <input name="username" ><br><br></td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-success">Save</button>
      </form>
    </div>

  </body>
</html>
