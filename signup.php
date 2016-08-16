<?php ?>

<html>
<head>
  <title>Register For WhatsMyEp</title>
  <link rel = "stylesheet" href = "css/bootstrap.css">
  <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
  <div class = "content">
    <div class = "register">
      <h1><b>Register Now</b></h1>

      <form action = "register.php" method = "post">
        <div class = "row">
          <label for = "name">Full Name</label>
          <input type = "text" name = "name" class = "form-control input">
        </div>
        <div class = "row">
          <label for = "username">Username</label>
          <input type = "text" name = "username" class = "form-control input">
        </div>
        <div class = "row">
          <label for = "password">Password</label>
          <input type = "text" name = "password" class = "form-control input">
        </div>
        <button type = "submit" class = "btn btn-info">Register</button>
      </form>
    </div>
  </div>

  <footer class = "main-footer">
    <p>WhatsMyEp (c) 2016. Powered in the LAMP Stack (OMGLOLHESTILLUSESPHP)</p>
  </footer>
</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
