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

function updateUser($id, $userdata)
{

}

function deleteUser($id)
{

}
