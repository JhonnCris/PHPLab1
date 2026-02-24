<?php
include "db.php";

if (!isset($_GET['id'])) {
    header("Location: services_list.php");
    exit;
}

$id = $_GET['id'];

$get = mysqli_query($conn, "SELECT * FROM services WHERE service_id = $id");
$service = mysqli_fetch_assoc($get);

if (isset($_POST['update'])) {
  $name = $_POST['service_name'];
  $desc = $_POST['description'];
  $rate = $_POST['hourly_rate'];
  $active = $_POST['is_active'];
  $createdat = $_POST['created_at'];

  mysqli_query($conn, "UPDATE services
    SET service_name='$name',
        description='$desc',
        hourly_rate='$rate',
        is_active='$active',
        created_at='$createdat'
    WHERE service_id=$id");

  header("Location: services_list.php");
  exit;
}
?>