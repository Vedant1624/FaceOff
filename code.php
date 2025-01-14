<?php
include('conn.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    header("Location: admin/index.php");
} else {
    echo '<script>alert("Invalid email or password.");</script>';
    
}

$conn->close();
?>
