<?php
$mysqli = new mysqli("localhost", "root", "", "toggle_app");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];

$stmt = $mysqli->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
$stmt->bind_param("si", $name, $age);
$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: index.php");
exit();
?>

