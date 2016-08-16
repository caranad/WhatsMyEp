<?php

session_start();

include "db_server.php";

unset($_SESSION['user_name']);
unset($_SESSION['user_username']);
unset($_SESSION['user_password']);

$new_name = $_POST['name'];
$new_username = $_POST['username'];
$new_password = $_POST['password'];

if ($new_name != "")
{
  $query = $db->prepare("update users set name = :n where id = :i");
  $query->bindParam(":n", $new_name);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  $_SESSION['user_name'] = "Name information edited successfully.";
  $_SESSION['name'] = $new_name;
}
if ($new_username != "")
{
  $query = $db->prepare("update users set username = :n where id = :i");
  $query->bindParam(":n", $new_username);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  $_SESSION['user_username'] = "Username information edited successfully.";
  $_SESSION['username'] = $new_username;
}
if ($new_password != "")
{
  $query = $db->prepare("update users set password = :n where id = :i");
  $query->bindParam(":n", $new_password);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  $_SESSION['user_password'] = "Password information edited successfully.";
  $_SESSION['username'] = $new_username;
}

header("Location: options.php");

?>
