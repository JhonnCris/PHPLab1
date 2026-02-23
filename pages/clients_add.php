<?php
include "db.php";
 
$message = "";
 
if (isset($_POST['save'])) {
  $clientid = $_POST['client_id'];
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $createdat = $_POST['created_at'];
 
  if ($full_name == "" || $email == "") {
    $message = "Name and Email are required!";
  } else {
    $sql = "INSERT INTO clients (client_id, full_name, email, phone, address, created_at)
            VALUES ('$clientid','$full_name', '$email', '$phone', '$address', '$createdat')";
    mysqli_query($conn, $sql);
    header("Location: clients_list.php");
    exit;
  }
}
?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>Add Client</title></head>
<body>
<?php include "../nav.php"; ?>
 
<h2>Add Client</h2>
<p style="color:red;"><?php echo $message; ?></p>
 
<form method="post">
  <label>Client ID</label><br>
  <input type="number" name="client_id"><br><br>

  <label>Full Name*</label><br>
  <input type="text" name="full_name"><br><br>
 
  <label>Email*</label><br>
  <input type="text" name="email"><br><br>
 
  <label>Phone</label><br>
  <input type="text" name="phone"><br><br>
 
  <label>Address</label><br>
  <input type="text" name="address"><br><br>

  <label>Created At</label><br>
  <input type="text" name="created_at" value="<?php echo date("Y-m-d H:i:s"); ?>" readonly><br><br>
 
  <button type="submit" name="save">Save</button>
</form>

</body>
</html>
 