<?php
session_start();
include "db_server.php";

$id = $_GET['id'];
$_SESSION['added'] = "Item added";

$query = $db->prepare("insert into user_shows values (:uid, :sid)");
$query->bindParam(":uid", $_SESSION['id']);
$query->bindParam(":sid", $id);
$query->execute();

// Add relation to the user_show_episodes database
$select_items = $db->prepare("select * from episodes where show_id = :id");
$select_items->bindParam(":id", $id);
$select_items->execute();

while ($row = $select_items->fetch(PDO::FETCH_ASSOC))
{
  $query = $db->prepare("insert into user_show_episodes values (:uid, :sid, :eid, 0)");
  $query->bindParam(":uid", $_SESSION['id']);
  $query->bindParam(":sid", $id);
  $query->bindParam(":eid", $row['episode_number']);
  $query->execute();
}

header("Location: profile.php");

?>
