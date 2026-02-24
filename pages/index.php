<?php
include "db.php";

$clients = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM clients"))['c'];
$services = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM services"))['c'];
$bookings = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS c FROM bookings"))['c'];
 
$revRow = mysqli_fetch_assoc(mysqli_query($conn, "SELECT IFNULL(SUM(amount_paid),0) AS s FROM payments"));
$revenue = $revRow['s'];
?>
<!doctype html>
<html>  
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include "nav.php";

 ?>
 
<h2>Dashboard</h2>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul>
  <li>Total Clients: <b><?php echo $clients; ?></b></li>
  <li>Total Services: <b><?php echo $services; ?></b></li>
  <li>Total Bookings: <b><?php echo $bookings; ?></b></li>
  <li>Total Revenue: <b>₱<?php echo number_format($revenue,2); ?></b></li>
</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <p>
  Quick links:
  <a href="clients_add.php">Add Client</a> |
  <a href="bookings_create.php">Create Booking</a>
  <a href="clients_edit.php">Edit Client</a>
  <a href="services_edit.php">Edit Service</a>
</p>
    </div>
  </div>
 </nav>

 

 
</body>
</html>