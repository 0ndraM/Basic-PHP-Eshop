<?php
session_start();

if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
  $users = [
    "admin" => "admin",
    "0ndra" => "Peklotr33",
    "joy" => "987654"
  ];

  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }

  if (!isset($_SESSION["user"])) { $failed = true; }
}


if (isset($_SESSION["user"])) {
  header("Location: admin.php");
  exit();
}
