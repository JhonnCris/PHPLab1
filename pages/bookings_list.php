<?php
include "db.php";
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bookings</title>
</head>
<body>

<?php include "nav.php";

 ?>

<h2>Bookings List</h2>

<table border="1" cellpadding="10">
  <tr>
    <th>Booking ID</th>
    <th>Client ID</th>
    <th>Service ID</th>
    <th>Booking Date</th>
    <th>Hours</th>
    <th>Hourly Rate</th>
    <th>Total Cost</th>
    <th>Status</th>
    <th>Created At</th>
  </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM bookings");

while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>".$row['booking_id']."</td>";
  echo "<td>".$row['client_id']."</td>";
  echo "<td>".$row['service_id']."</td>";
  echo "<td>".$row['booking_date']."</td>";
  echo "<td>".$row['hours']."</td>";
  echo "<td>".$row['hourly_rate_snapshot']."</td>";
  echo "<td>".$row['total_cost']."</td>";
  echo "<td>".$row['status']."</td>";
  echo "<td>".$row['created_at']."</td>";
  echo "</tr>";
}
?>

</table>

</body>
</html>
