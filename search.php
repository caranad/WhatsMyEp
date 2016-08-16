<?php
session_start();

include "db_server.php";

if (isset($_SESSION['name']))
{

?>

<html>
<head>
  <title>Search results - <?php echo $_GET['search']; ?></title>
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
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php">Home</a></li>
          <li class = "active"><a href="tv_shows.php">TV Shows</a></li>
          <li><a href="options.php">Options</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <h1>Search results for: <?php echo $_GET['search']; ?></h1>

    <div class = "table">
      <?php

      $search_term = $_GET['search'];
      $term = "%$search_term%";

      $query = $db->prepare("select * from shows where name like :term");
      $query->bindParam(":term", $term);
      $query->execute();

      echo "<div class = 'table'>";
      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {
        $id = $row['id'];
        $name = $row['name'];
        $airdate = $row['airdate'];
        $genre = $row['genre'];

        echo "<div class = 'row'>";
        echo "  <div class = 'column'>";
        echo "    $name";
        echo "  </div>";
        echo "  <div class = 'column'>";
        echo "    $airdate";
        echo "  </div>";
        echo "  <div class = 'column'>";
        echo "    $genre";
        echo "  </div>";

        $check = $db->prepare("select count(*) from user_shows where show_id = :id and user_id = :uid");
        $check->bindParam(":id", $id);
        $check->bindParam(":uid", $_SESSION['id']);
        $check->execute();

        $row = $check->fetch(PDO::FETCH_ASSOC);

        echo "  <div class = 'column'>";

        if ($row['count(*)'] == 1)
        {
          echo "Cannot add to favorites. Already exists.";
        }
        else
        {
          echo "<a href = 'add.php?id=$id'>Add to favorites</a>";
        }
        echo "  </div>";
        echo "</div>";
      }
      echo "</div>";

      ?>
    </div>

  </div>

  <footer class = "main-footer">
    <p>WhatsMyEp (c) 2016. Powered in the LAMP Stack (LOOOOL)</p>
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
