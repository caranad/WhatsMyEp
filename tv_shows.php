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
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php">Home</a></li>
          <li class = "active"><a href="tv_shows.php">TV Shows</a></li>
          <li><a href="options.php">Options</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <h1><?php echo $_SESSION['name']; ?>'s favorite TV shows</h1>

    <div class = "table">
      <?php

      $id = $_SESSION['id'];

      $query = $db->prepare("select * from user_shows left join shows on user_shows.show_id = shows.id where user_id = :v");
      $query->bindParam(":v", $id);
      $query->execute();

      while ($row = $query->fetch(PDO::FETCH_ASSOC))
      {
        $show_id = $row['id'];
        echo "<div class = 'row'>";
        echo "  <div class = 'column'>";
        echo "  <a href = 'show_info.php?id=$show_id'>";
        echo "    <h3>" . $row['name'] . "</h3>";
        echo "  </a>";
        echo "  </div>";
        echo "  <div class = 'column'>";
        echo $row['airdate'];
        echo "  </div>";
        echo "  <div class = 'column'>";
        echo $row['genre'];
        echo "  </div>";
        echo "</div>";
      }

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
