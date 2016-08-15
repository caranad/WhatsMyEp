<?php

session_start();

include "db_server.php";

$username = $_POST['user'];
$password = $_POST['pass'];

$query = $db->prepare("select * from users where username = :u and password = :p");
$query->bindParam(":u", $username);
$query->bindParam(":p", $password);
$query->execute();

while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
  if ($row['username'] == $username && $row['password'] == $password)
  {
    $_SESSION['name'] = $row['name'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
  }
}

if (!isset($_SESSION['username']))
{
  if (!isset($_SESSION['tries']))
  {
    $_SESSION['tries'] = 1;
  }
  else
  {
    $_SESSION['tries'] += 1;
  }

  header("Location: index.php");
}
else
{
  unset($_SESSION['tries']);
  header("Location: profile.php");
}

?>
