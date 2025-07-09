<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User Form with Toggle</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 8px;
    }
    table { margin-top: 20px; }
    input[type="text"], input[type="number"] {
      margin-right: 10px;
    }
  </style>
</head>
<body>

  <form action="insert.php" method="POST">
    Name: <input type="text" name="name" required />
    Age: <input type="number" name="age" required />
    <input type="submit" value="Submit" />
  </form>

  <div id="table-container">
    <?php include 'fetch.php'; ?>
  </div>

  <script>
    function toggleStatus(id) {
      fetch(`toggle.php?id=${id}`)
        .then(response => response.text())
        .then(data => {
          document.getElementById("table-container").innerHTML = data;
        });
    }
  </script>

</body>
</html>