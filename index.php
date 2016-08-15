<?php
session_start();

if (!isset($_SESSION['name']))
{
?>

<html>
<head>
  <title>Login - WhatsMyEp</title>
  <link rel = "stylesheet" href = "css/bootstrap.css">
  <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
  <div class = "content">
    <div class = "modal-login">
      <form action = "login.php" method = "post" class = "centered">
        <h1><b>Login To WhatsMyEp</b></h1>
        <?php if (isset($_SESSION['tries'])) { echo "Invalid username or password."; } ?>
        <div class = "row">
          <label for = "user">Username</label>
          <input type = "text" name = "user" class = "form-control input" value = ""/>
        </div>
        <div class = "row">
          <label for = "pass">Password</label>
          <input type = "password" name = "pass" class = "form-control input" value = ""/>
        </div>
        <div class = "row">
          <button type = "submit" class = "btn btn-success">Login</button>
        </div>
      </form>
    </div>
  </div>

  <footer class = "main-footer">
    <p>WhatsMyEp (c) 2016. Powered in the LAMP Stack (LOOOOL)</p>
  </footer>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src = "js/login-modal.js"></script>
</html>

<?php
}
else
{
  header("Location: profile.php");
}
?>
