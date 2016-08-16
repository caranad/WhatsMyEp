<?php
session_start();

include "db_server.php";

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['created'] = "You are now registered to WhatsMyEp!";

$query = $db->prepare("insert into users (name, username, password) values (:name, :username, :password)");
$query->bindParam(":name", $name);
$query->bindParam(":username", $username);
$query->bindParam(":password", $password);
$query->execute();

header("Location: index.php");

?>
