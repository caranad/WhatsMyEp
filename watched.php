<?php
session_start();

include "db_server.php";

$id = $_GET['show'];
$ep = $_GET['ep'];
$u = $_SESSION['id'];

$query = $db->prepare("update user_show_episodes set watched = 1 where show_id = :i and episode_id = :e and user_id = :u");
$query->bindParam(":u", $u);
$query->bindParam(":i", $id);
$query->bindParam(":e", $ep);
$query->execute();

header("Location: show_info.php?id=$id");

?>
