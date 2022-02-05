<?php

function getUsers()
{
  //Creates an associated array of users from the users.json file
  return json_decode(file_get_contents("users.json"), true);
}

function getUserById($id)
{
  $users = getUsers();
  foreach ($users as $user) {
    if ($id == $user['id']) {
      return $user;
    }
  }
  return null;
}

function createUser($newUserData)
{

}

function updateUser($id, $userData)
{
  $users = getUsers();
  foreach ($users as $i => $user) {
    if ($user['id'] == $id) {
      $users[$i] = array_merge($user, $userData);
    }
  }
  file_put_contents('users.json', json_encode($users));
}

function deleteUser($id)
{
  $users = getUsers();
  foreach ($users as $i => $user) {
    if ($user['id'] == $id) {
      unset($users[$i]);
    }
  }
  file_put_contents('users.json', json_encode($users));
}
