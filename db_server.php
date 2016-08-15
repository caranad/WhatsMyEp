<?php

$host = "localhost";
$dbname = "whatsmyep";
$username = "root";
$password = "mcjuggernuggets";

try
{
  $db = new PDO("mysql:
    host=$host;
    dbname=$dbname;
    charset=utf8", $username, $password);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (PDOException $e)
{
  echo $db->getMessage();
}

?>
