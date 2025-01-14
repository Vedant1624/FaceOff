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
    $productConnectionType = $_POST['ConnectionType'];
    $productRGB = $_POST['RGB'];
    $productDcable = $_POST['Dcable'];
    $productFold = $_POST['Fold'];
    $productTangle = $_POST['Tangle'];
    $productStereo = $_POST['Stereo'];
    $productDriverSize = $_POST['DriverSize'];
    $productNoise = $_POST['Noise'];
    $productDriverCount = $_POST['DriverCount'];
    $productMic = $_POST['Mic'];
    $productConnectivity = $_POST['Connectivity'];
    $productWarranty = $_POST['Warranty'];
    $productWidth = $_POST['Width'];
    $productHeight = $_POST['Height'];
    $productDepth = $_POST['Depth'];
    $productUrl = $_POST['Url'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO lowheadphone (Id, Name, Price, Weight, ConnectionType, RGB, Dcable, Fold, Tangle, Stereo, DriverSize, Noise, DriverCount, Mic, Connectivity, Warranty, Width, Height, Depth,Url)
            VALUES ('$productId', '$productName', '$productPrice', '$productWeight', '$productConnectionType', '$productRGB', '$productDcable', '$productFold', '$productTangle', '$productStereo', '$productDriverSize', '$productNoise', '$productDriverCount', '$productMic', '$productConnectivity', '$productWarranty', '$productWidth', '$productHeight', '$productDepth','$productUrl')";




    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='budget_headphone.php'; alert('Record Added Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_product"])) {

    $productId = $_POST['Id'];
    $productName = $_POST['Name'];
    $productPrice = $_POST['Price'];
    $productWeight = $_POST['Weight'];
    $productConnectionType = $_POST['ConnectionType'];
    $productRGB = $_POST['RGB'];
    $productDcable = $_POST['Dcable'];
    $productFold = $_POST['Fold'];
    $productTangle = $_POST['Tangle'];
    $productStereo = $_POST['Stereo'];
    $productDriverSize = $_POST['DriverSize'];
    $productNoise = $_POST['Noise'];
    $productDriverCount = $_POST['DriverCount'];
    $productMic = $_POST['Mic'];
    $productConnectivity = $_POST['Connectivity'];
    $productWarranty = $_POST['Warranty'];
    $productWidth = $_POST['Width'];
    $productHeight = $_POST['Height'];
    $productDepth = $_POST['Depth'];
    $productUrl = $_POST['Url'];

    // SQL query to update data in the database based on Product Id
    $sql = "UPDATE lowheadphone SET 
            Name='$productName',
        Price='$productPrice',
        Weight='$productWeight',
        ConnectionType='$productConnectionType',
        RGB='$productRGB',
        Dcable='$productDcable',
        Fold='$productFold',
        Tangle='$productTangle',
        Stereo='$productStereo',
        DriverSize='$productDriverSize',
        Noise='$productNoise',
        DriverCount='$productDriverCount',
        Mic='$productMic',
        Connectivity='$productConnectivity',
        Warranty='$productWarranty',
        Width='$productWidth',
        Height='$productHeight',
        Depth='$productDepth',
        Url='$productUrl'
        WHERE Id='$productId'";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {

        echo "<script>budget_headphone.php'; alert('Record updated Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {

    $productIdToDelete = $_POST["Id"];

    $sql = "DELETE FROM lowheadphone WHERE Id = '$productIdToDelete'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        echo "<script>budget_headphone.php'; alert('Record Deleted Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<html>

<head>
    <link rel="stylesheet" href="css/lma.css?<?php echo time(); ?>">
</head>

<body>
    <div class="line2">

    </div>
    <section>
        <h1>Admin Panel | Budget Headphone</h1>
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
                <label>Product ConnectionType</label>
                <input type="text" name="ConnectionType">
            </div>
            <div class="input-field">
                <label>Product RGB</label>
                <input type="text" name="RGB">
            </div>
            <div class="input-field">
                <label>Product Dcable</label>
                <input type="text" name="Dcable">
            </div>
            <div class="input-field">
                <label>Product Fold</label>
                <input type="text" name="Fold">
            </div>
            <div class="input-field">
                <label>Product Tangle</label>
                <input type="text" name="Tangle">
            </div>
            <div class="input-field">
                <label>Product Stereo</label>
                <input type="text" name="Stereo">
            </div>
            <div class="input-field">
                <label>Product DriverSize</label>
                <input type="text" name="DriverSize">
            </div>
            <div class="input-field">
                <label>Product Noise</label>
                <input type="text" name="Noise">
            </div>
            <div class="input-field">
                <label>Product DriverCount</label>
                <input type="text" name="DriverCount">
            </div>
            <div class="input-field">
                <label>Product Mic</label>
                <input type="text" name="Mic">
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
                <label>Product Width</label>
                <input type="text" name="Width">
            </div>
            <div class="input-field">
                <label>Product Height</label>
                <input type="text" name="Height">
            </div>
            <div class="input-field">
                <label>Product Depth</label>
                <input type="text" name="Depth">
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