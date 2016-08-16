<?php
session_start();

include "db_server.php";

if (isset($_SESSION['name']))
{

?>

<html>
<head>
  <title>Shows - <?php echo $_SESSION['name']; ?></title>
  <link rel = "stylesheet" href = "css/bootstrap.css">
  <link rel = "stylesheet" href = "css/profile.css">
</head>
<body>
  <div class = "content">
    <nav class="navbar navbar-default custom">
      <div class="navbar-header">
        <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="profile.php">Home</a></li>
          <li><a href="tv_shows.php">TV Shows</a></li>
          <li class = "active"><a href="options.php">Options</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <div align = "center">
      <?php

      $id = $_GET['id'];
      $query = $db->prepare("select * from shows where id = :id");
      $query->bindParam(":id", $id);
      $query->execute();

      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {
        echo "<h1>Show Name: " . $row['name'] . "</h1>";
        echo "<br>";
        echo "<h3>Year Of Air: " . $row['airdate'] . "</h3>";
        echo "<br>";
        echo "<h3>Genre: " . $row['genre'] . "</h3>";
      }

      $query = $db->prepare("select * from user_show_episodes left join episodes on user_show_episodes.episode_id = episodes.episode_number
                             and user_show_episodes.show_id = episodes.show_id where user_id = :id and episodes.show_id = :sid");
      $query->bindParam(":id", $_SESSION['id']);
      $query->bindParam(":sid", $id);
      $query->execute();

      echo "<div class = 'table'>";
      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {
        $ep_num = $row['episode_number'];
        $ep_name = $row['episode_name'];
        $status = $row['watched'];

        echo "<div class = 'row'>";
        echo "  <div class = 'column'>";
        echo "    $ep_num";
        echo "  </div>";
        echo "  <div class = 'column'>";
        echo "    $ep_name";
        echo "  </div>";
        echo "  <div class = 'column'>";

        if ($status == false)
        {
          echo "<div>Episode not watched.</div>";
          echo "<a href = 'watched.php?show=$id&ep=$ep_num'>Mark as watched</a>";
        }
        else
        {
          echo "You have already watched this episode.";
        }
        echo "  </div>";
        echo "</div>";
      }
      echo "</div>";

      ?>
    </div>

    <a href = "tv_shows.php">Go back to TV Shows</a>

  </div>

  <footer class = "main-footer">
    Created by Christopher Aranadi (c) 2016
  </footer>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>

<?php
}
else
{
  header("Location: index.php");
}
?>
