<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "compare";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Add
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_product"])) {
    $productId = $_POST["Id"];
    $productName = $_POST["Name"];
    $productPrice = $_POST["Price"];
    $productWeight = $_POST["Weight"];
    $productWarranty = $_POST["Warranty"];
    $productConnectivity = $_POST["Connectivity"];
    $productBacklit = $_POST["Backlit"];
    $productRGB = $_POST["RGB"];
    $productKeyType = $_POST["KeyType"];
    $productLockKey = $_POST["LockKey"];
    $productTKL = $_POST["TKL"];
    $productOrientation = $_POST["Orientation"];
    $productAntiGhosting = $_POST["AntiGhosting"];
    $productPowerSource = $_POST["PowerSource"];
    $productWirelessType = $_POST["WirelessType"];
    $productHotSwappable = $_POST["HotSwappable"];
    $productNokey = $_POST["Nokey"];
    $productKeyLife = $_POST["KeyLife"];
    $productOrigin = $_POST["Origin"];
    $productLength = $_POST["Length"];
    $productWidth = $_POST["Width"];
    $productHeight = $_POST["Height"];
    $productUrl = $_POST['Url'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO highkeyboard (Id, Name, Price, Weight, Warranty, Connectivity, Backlit, RGB, KeyType, LockKey, TKL, Orientation, AntiGhosting, PowerSource, WirelessType, HotSwappable, Nokey, KeyLife, Origin, Length, Width, Height,Url)
            VALUES ('$productId', '$productName', '$productPrice', '$productWeight', '$productWarranty', '$productConnectivity', '$productBacklit', '$productRGB', '$productKeyType', '$productLockKey', '$productTKL', '$productOrientation', '$productAntiGhosting', '$productPowerSource', '$productWirelessType', '$productHotSwappable', '$productNokey', '$productKeyLife', '$productOrigin', '$productLength', '$productWidth', '$productHeight','$productUrl')";



    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='flagship_keyboard.php'; alert('Record Added Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_product"])) {

    $productId = $_POST["Id"];
    $productName = $_POST["Name"];
    $productPrice = $_POST["Price"];
    $productWeight = $_POST["Weight"];
    $productWarranty = $_POST["Warranty"];
    $productConnectivity = $_POST["Connectivity"];
    $productBacklit = $_POST["Backlit"];
    $productRGB = $_POST["RGB"];
    $productKeyType = $_POST["KeyType"];
    $productLockKey = $_POST["LockKey"];
    $productTKL = $_POST["TKL"];
    $productOrientation = $_POST["Orientation"];
    $productAntiGhosting = $_POST["AntiGhosting"];
    $productPowerSource = $_POST["PowerSource"];
    $productWirelessType = $_POST["WirelessType"];
    $productHotSwappable = $_POST["HotSwappable"];
    $productNokey = $_POST["Nokey"];
    $productKeyLife = $_POST["KeyLife"];
    $productOrigin = $_POST["Origin"];
    $productLength = $_POST["Length"];
    $productWidth = $_POST["Width"];
    $productHeight = $_POST["Height"];
    $url = $_POST['Url'];

    // SQL query to update data in the database based on Product Id
    $sql = "UPDATE highkeyboard SET 
                Name = '$productName', 
            Price = '$productPrice', 
            Weight = '$productWeight', 
            Warranty = '$productWarranty', 
            Connectivity = '$productConnectivity', 
            Backlit = '$productBacklit', 
            RGB = '$productRGB', 
            KeyType = '$productKeyType', 
            LockKey = '$productLockKey', 
            TKL = '$productTKL', 
            Orientation = '$productOrientation', 
            AntiGhosting = '$productAntiGhosting', 
            PowerSource = '$productPowerSource', 
            WirelessType = '$productWirelessType', 
            HotSwappable = '$productHotSwappable', 
            Nokey = '$productNokey', 
            KeyLife = '$productKeyLife', 
            Origin = '$productOrigin', 
            Length = '$productLength', 
            Width = '$productWidth', 
            Height = '$productHeight',
            Url='$Url' 
            WHERE Id = '$productId'";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {

        echo "<script>window.location.href='flagship_keyboard.php'; alert('Record updated Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {

    $productIdToDelete = $_POST["Id"];

    $sql = "DELETE FROM highkeyboard WHERE Id = '$productIdToDelete'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='flagship_keyboard.php'; alert('Record Deleted Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<html>

<head>
    <link rel="stylesheet" href="css/lma.css">
</head>

<body>
    <div class="line2">

    </div>
    <section>
        <h1>Admin Panel | Flagship Keyboard</h1>
        <form method="POST" action="">
            <div class="input-field">
                <label>Product Id</label>
                <input type="text" name="Id">
            </div>
            <div class="input-field">
                <label>Product Name</label>
                <input type="text" name="Name">
            </div>
            <div class="input-field">
                <label>Product Price</label>
                <input type="text" name="Price">
            </div>
            <div class="input-field">
                <label>Product Weight</label>
                <input type="text" name="Weight">
            </div>
            <div class="input-field">
                <label>Product Warranty</label>
                <input type="text" name="Warranty">
            </div>
            <div class="input-field">
                <label>Product Connectivity</label>
                <input type="text" name="Connectivity">
            </div>
            <div class="input-field">
                <label>Product Backlit</label>
                <input type="text" name="Backlit">
            </div>
            <div class="input-field">
                <label>Product RGB</label>
                <input type="text" name="RGB">
            </div>
            <div class="input-field">
                <label>Product KeyType</label>
                <input type="text" name="KeyType">
            </div>
            <div class="input-field">
                <label>Product LockKey</label>
                <input type="text" name="LockKey">
            </div>
            <div class="input-field">
                <label>Product TKL</label>
                <input type="text" name="TKL">
            </div>
            <div class="input-field">
                <label>Product Orientation</label>
                <input type="text" name="Orientation">
            </div>
            <div class="input-field">
                <label>Product AntiGhosting</label>
                <input type="text" name="AntiGhosting">
            </div>
            <div class="input-field">
                <label>Product No of AntiGhosting</label>
                <input type="text" name="NoAntiGhosting">
            </div>
            <div class="input-field">
                <label>Product CableLength</label>
                <input type="text" name="CableLength">
            </div>
            <div class="input-field">
                <label>Product CableType</label>
                <input type="text" name="CableType">
            </div>
            <div class="input-field">
                <label>Product Nokey</label>
                <input type="text" name="Nokey">
            </div>
            <div class="input-field">
                <label>Product KeyLife</label>
                <input type="text" name="KeyLife">
            </div>
            <div class="input-field">
                <label>Product Origin</label>
                <input type="text" name="Origin">
            </div>
            <div class="input-field">
                <label>Product Length</label>
                <input type="text" name="Length">
            </div>
            <div class="input-field">
                <label>Product Width</label>
                <input type="text" name="Width">
            </div>
            <div class="input-field">
                <label>Product Height</label>
                <input type="text" name="Height">
            </div>
            <div class="input-field">
                <label>Product Url</label>
                <input type="text" name="Url">
            </div>
            <input type="submit" name="add_product" value="Add Product" class="btn">
            <input type="submit" name="update_product" value="Update Product" class="btn">
            <input type="submit" name="delete_product" value="Delete Product" class="btn">


        </form>



    </section>
</body>

</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>