<?php
$mysqli = new mysqli("localhost", "root", "", "toggle_app");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$id = intval($_GET['id']);

$result = $mysqli->query("SELECT status FROM users WHERE id = $id");
$row = $result->fetch_assoc();

$new_status = ($row['status'] == 1) ? 0 : 1;

$mysqli->query("UPDATE users SET status = $new_status WHERE id = $id");

include 'fetch.php';
?>
