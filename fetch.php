<?php
$mysqli = new mysqli("localhost", "root", "", "toggle_app");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM users");

echo "<table>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Age</th>
  <th>Status</th>
  <th>Action</th>
</tr>";

while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $name = htmlspecialchars($row['name']);
  $age = $row['age'];
  $status = $row['status'];
  echo "<tr>
          <td>$id</td>
          <td>$name</td>
          <td>$age</td>
          <td>$status</td>
          <td><button onclick='toggleStatus($id)'>Toggle</button></td>
        </tr>";
}
echo "</table>";

$mysqli->close();
?>
