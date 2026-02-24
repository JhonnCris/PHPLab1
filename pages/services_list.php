<?php
include "db.php";
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Services</title>
</head>
<body>

<?php include "nav.php"; ?>

<h2>Services</h2>

<table border="1" cellpadding="10">
  <tr>
    <th>Service ID</th>
    <th>Service Name</th>
    <th>Description</th>
    <th>Hourly Rate</th>
    <th>Is Active</th>
    <th>Created At</th>
    <th>Action</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM services ORDER BY service_id DESC");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['service_id']."</td>";
  echo "<td>".$row['service_name']."</td>";
  echo "<td>".$row['description']."</td>";
  echo "<td>₱".$row['hourly_rate']."</td>";  // FIXED (you showed is_active as peso before)
  echo "<td>".($row['is_active']==1 ? "Yes" : "No")."</td>";
  echo "<td>".$row['created_at']."</td>";
  echo "<td><a href='services_edit.php?id=".$row['service_id']."'>Edit</a></td>";
  echo "</tr>";
}
?>

</table>
</body>
</html>