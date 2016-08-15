<?php
session_start();

if (isset($_SESSION['name']))
{

?>

<html>
<head>
  <title>Profile - <?php echo $_SESSION['name']; ?></title>
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
      <div class="navbar-collapse collapse ">
        <ul class="nav navbar-nav navbar-right">
          <li class = "active"><a href="profile.php">Home</a></li>
          <li><a href="tv_shows.php">TV Shows</a></li>
          <li><a href="options.php">Options</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>

    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
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
