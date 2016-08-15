<?php

session_start();

include "db_server.php";

$new_name = $_POST['name'];
$new_username = $_POST['username'];
$new_password = $_POST['password'];

if ($new_name != "")
{
  $query = $db->prepare("update users set name = :n where id = :i");
  $query->bindParam(":n", $new_name);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  echo "User changed successfully <br>";
  $_SESSION['name'] = $new_name;
}
if ($new_username != "")
{
  $query = $db->prepare("update users set username = :n where id = :i");
  $query->bindParam(":n", $new_username);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  echo "Username changed successfully <br>";
  $_SESSION['username'] = $new_username;
}
if ($new_password != "")
{
  $query = $db->prepare("update users set password = :n where id = :i");
  $query->bindParam(":n", $new_password);
  $query->bindParam(":i", $_SESSION['id']);
  $query->execute();
  echo "Password changed successfully <br>";
  $_SESSION['username'] = $new_username;
}

echo "<a href = 'options.php'>Go Back</a>";

?>
