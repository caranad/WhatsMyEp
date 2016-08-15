<?php
session_start();

if (isset($_SESSION['name']))
{

?>

<html>
<head>
  <title>Profile - <?php echo $_SESSION['name']; ?></title>
  <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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

    <h1>Personal Options</h1>

    <div align = "center">
      <form action = "change_user.php" method = "post">
        <div class = "row-item">
          <label for = "name">Name</label>
          <input type = "text" name = "name" class = "form-control">
        </div>
        <div class = "row-item">
          <label for = "username">Username</label>
          <input type = "text" name = "username" class = "form-control">
        </div>
        <div class = "row-item">
          <label for = "password">Password</label>
          <input type = "text" name = "password" class = "form-control">
        </div>

        <!-- Future: Add select-options bar for shows the user wants to add -->
        <button class = "btn btn-info">Update Information</button>
      </form>
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
