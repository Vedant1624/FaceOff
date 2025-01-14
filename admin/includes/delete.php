
<?php

if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];

    $conn = mysqli_connect("localhost", "root", "", "compare");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "DELETE FROM admins WHERE email = '$delete_id'";
    if (mysqli_query($conn, $query)) {
        header('Location: ../register.php');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
