<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clients</title>
</head>
<body>

<?php include "nav.php";

 ?>

<h2>Clients List</h2>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Address</th>
    <th>Created At</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM clients");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['client_id']."</td>";
  echo "<td>".$row['full_name']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td>".$row['created_at']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>
