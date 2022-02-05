<?php
include 'users.php';

$id = $_GET['id'];
$users = getUsers();

deleteUser($id);
header("Location: index.php");

 ?>
