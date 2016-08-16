<?php
session_start();
include "db_server.php";

$id = $_GET['id'];
$_SESSION['deleted'] = "Item deleted";

$query = $db->prepare("delete from user_shows where user_id = :u and show_id = :s");
$query->bindParam(":u", $_SESSION['id']);
$query->bindParam(":s", $id);
$query->execute();

$delete = $db->prepare("delete from user_show_episodes where show_id = :i and user_id = :u");
$delete->bindParam(":i", $id);
$delete->bindParam(":u", $_SESSION['id']);
$delete->execute();

header("Location: tv_shows.php");

?>
