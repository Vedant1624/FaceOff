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
    $productId = $_POST['Id'];
    $productName = $_POST['Name'];
    $productPrice = $_POST['Price'];
    $productWeight = $_POST['Weight'];
    $productFit = $_POST['Fit'];
    $productCableLength = $_POST['CableLength'];
    $productRGB = $_POST['RGB'];
    $productFold = $_POST['Fold'];
    $productLowFreq = $_POST['LowFreq'];
    $productHighFreq = $_POST['HighFreq'];
    $productANC = $_POST['ANC'];
    $productDriverSize = $_POST['DriverSize'];
    $productDriverCount = $_POST['DriverCount'];
    $productConnectivity = $_POST['Connectivity'];
    $productWarranty = $_POST['Warranty'];
    $productNoMic = $_POST['NoMic'];
    $productRemoveMic = $_POST['RemoveMic'];
    $productMuteMic = $_POST['MuteMic'];
    $productHighMic = $_POST['HighMic'];
    $productWireless = $_POST['Wireless'];
    $productDimension = $_POST['Dimension'];
    $productUrl = $_POST['Url'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO highheadphone (Id, Name, Price, Weight, Fit, CableLength, RGB, Fold, LowFreq, HighFreq, ANC, DriverSize, DriverCount, Connectivity, Warranty, NoMic, RemoveMic, MuteMic, HighMic, Wireless, Dimension,Url)
            VALUES ('$productId', '$productName', '$productPrice', '$productWeight', '$productFit', '$productCableLength', '$productRGB', '$productFold', '$productLowFreq', '$productHighFreq', '$productANC', '$productDriverSize', '$productDriverCount', '$productConnectivity', '$productWarranty', '$productNoMic', '$productRemoveMic', '$productMuteMic', '$productHighMic', '$productWireless', '$productDimension','$productUrl')";




    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='flagship_headphone.php'; alert('Record Added Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_product"])) {

    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $weight = $_POST['Weight'];
    $fit = $_POST['Fit'];
    $cableLength = $_POST['CableLength'];
    $rgb = $_POST['RGB'];
    $fold = $_POST['Fold'];
    $lowFreq = $_POST['LowFreq'];
    $highFreq = $_POST['HighFreq'];
    $anc = $_POST['ANC'];
    $driverSize = $_POST['DriverSize'];
    $driverCount = $_POST['DriverCount'];
    $connectivity = $_POST['Connectivity'];
    $warranty = $_POST['Warranty'];
    $noMic = $_POST['NoMic'];
    $removeMic = $_POST['RemoveMic'];
    $muteMic = $_POST['MuteMic'];
    $highMic = $_POST['HighMic'];
    $wireless = $_POST['Wireless'];
    $dimension = $_POST['Dimension'];
    $url = $_POST['Url'];

    // SQL query to update data in the database based on Product Id
    $sql = "UPDATE highheadphone SET 
             Name='$name', 
            Price='$price',
            Weight='$weight',
            Fit='$fit',
            CableLength='$cableLength',
            RGB='$rgb',
            Fold='$fold',
            LowFreq='$lowFreq',
            HighFreq='$highFreq',
            ANC='$anc',
            DriverSize='$driverSize',
            DriverCount='$driverCount',
            Connectivity='$connectivity',
            Warranty='$warranty',
            NoMic='$noMic',
            RemoveMic='$removeMic',
            MuteMic='$muteMic',
            HighMic='$highMic',
            Wireless='$wireless',
            Dimension='$dimension',
            Url='$url'
            WHERE Id='$id'";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {

        echo "<script>window.location.href='flagship_headphone.php'; alert('Record updated Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {

    $productIdToDelete = $_POST["Id"];

    $sql = "DELETE FROM highheadphone WHERE Id = '$productIdToDelete'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='flagship_headphone.php'; alert('Record Deleted Successfully')</script>";
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
        <h1>Admin Panel | Flagship Headphone</h1>
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
                <label>Product Fit</label>
                <input type="text" name="Fit">
            </div>
            <div class="input-field">
                <label>Product CableLength</label>
                <input type="text" name="CableLength">
            </div>
            <div class="input-field">
                <label>Product RGB</label>
                <input type="text" name="RGB">
            </div>
            <div class="input-field">
                <label>Product Fold</label>
                <input type="text" name="Fold">
            </div>
            <div class="input-field">
                <label>Product LowFreq</label>
                <input type="text" name="LowFreq">
            </div>
            <div class="input-field">
                <label>Product HighFreq</label>
                <input type="text" name="HighFreq">
            </div>
            <div class="input-field">
                <label>Product ANC</label>
                <input type="text" name="ANC">
            </div>
            <div class="input-field">
                <label>Product DriverSize</label>
                <input type="text" name="DriverSize">
            </div>
            <div class="input-field">
                <label>Product DriverCount</label>
                <input type="text" name="DriverCount">
            </div>
            <div class="input-field">
                <label>Product Connectivity</label>
                <input type="text" name="Connectivity">
            </div>
            <div class="input-field">
                <label>Product Warranty</label>
                <input type="text" name="Warranty">
            </div>
            <div class="input-field">
                <label>Product NoMic</label>
                <input type="text" name="NoMic">
            </div>
            <div class="input-field">
                <label>Product RemoveMic</label>
                <input type="text" name="RemoveMic">
            </div>
            <div class="input-field">
                <label>Product MuteMic</label>
                <input type="text" name="MuteMic">
            </div>
            <div class="input-field">
                <label>Product HighMic</label>
                <input type="text" name="HighMic">
            </div>
            <div class="input-field">
                <label>Product Wireless</label>
                <input type="text" name="Wireless">
            </div>
            <div class="input-field">
                <label>Product Dimension</label>
                <input type="text" name="Dimension">
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