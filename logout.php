<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION["tries"]);

header("Location: index.php");

?>
