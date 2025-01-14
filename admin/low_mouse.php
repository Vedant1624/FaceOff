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
    $productMinDpi = $_POST["Min_dpi"];
    $productMaxDpi = $_POST["Max_dpi"];
    $productDpi = $_POST["dpi"];
    $productPollingRate = $_POST["PollingRate"];
    $productConnectivity = $_POST["Connectivity"];
    $productWireless = $_POST["Wireless"];
    $productWarranty = $_POST["Warranty"];
    $productButtons = $_POST["Buttons"];
    $productSideButtons = $_POST["SideButtons"];
    $productSoftware = $_POST["Software"];
    $productOrientation = $_POST["Orientation"];
    $productWeight = $_POST["Weight"];
    $productRgb = $_POST["Rgb"];
    $productCableType = $_POST["CableType"];
    $productCableLength = $_POST["CableLength"];
    $productLength = $_POST["Length"];
    $productWidth = $_POST["Width"];
    $productHeight = $_POST["Height"];
    $productUrl = $_POST['Url'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO lowmouse (Id, Name, Price, Min_dpi, Max_dpi, dpi, PollingRate, Connectivity, Wireless, Warranty, Buttons, SideButtons, Software, Orientation, Weight, Rgb, CableType, CableLength, Length, Width, Height,Url)
            VALUES ('$productId', '$productName', '$productPrice', '$productMinDpi', '$productMaxDpi', '$productDpi', '$productPollingRate', '$productConnectivity', '$productWireless', '$productWarranty', '$productButtons', '$productSideButtons', '$productSoftware', '$productOrientation', '$productWeight', '$productRgb', '$productCableType', '$productCableLength', '$productLength', '$productWidth', '$productHeight','$productUrl')";


    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='budget_mouse.php'; alert('Record Added Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_product"])) {

    $productIdToUpdate = $_POST["Id"];
    $productName = $_POST["Name"];
    $productPrice = $_POST["Price"];
    $productMinDpi = $_POST["Min_dpi"];
    $productMaxDpi = $_POST["Max_dpi"];
    $productDpi = $_POST["dpi"];
    $productPollingRate = $_POST["PollingRate"];
    $productConnectivity = $_POST["Connectivity"];
    $productWireless = $_POST["Wireless"];
    $productWarranty = $_POST["Warranty"];
    $productButtons = $_POST["Buttons"];
    $productSideButtons = $_POST["SideButtons"];
    $productSoftware = $_POST["Software"];
    $productOrientation = $_POST["Orientation"];
    $productWeight = $_POST["Weight"];
    $productRgb = $_POST["Rgb"];
    $productCableType = $_POST["CableType"];
    $productCableLength = $_POST["CableLength"];
    $productLength = $_POST["Length"];
    $productWidth = $_POST["Width"];
    $productHeight = $_POST["Height"];
    $productUrl = $_POST['Url'];

    // SQL query to update data in the database based on Product Id
    $sql = "UPDATE lowmouse SET 
                Name = '$productName', 
                Price = '$productPrice', 
                Min_dpi = '$productMinDpi', 
                Max_dpi = '$productMaxDpi', 
                dpi = '$productDpi', 
                PollingRate = '$productPollingRate', 
                Connectivity = '$productConnectivity', 
                Wireless = '$productWireless', 
                Warranty = '$productWarranty', 
                Buttons = '$productButtons', 
                SideButtons = '$productSideButtons', 
                Software = '$productSoftware', 
                Orientation = '$productOrientation', 
                Weight = '$productWeight', 
                Rgb = '$productRgb', 
                CableType = '$productCableType', 
                CableLength = '$productCableLength', 
                Length = '$productLength', 
                Width = '$productWidth', 
                Height = '$productHeight' ,
                Url = '$productUrl'
            WHERE Id = '$productIdToUpdate'";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {

        echo "<script>window.location.href='budget_mouse.php'; alert('Record updated Successfully')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_product"])) {

    $productIdToDelete = $_POST["Id"];

    $sql = "DELETE FROM lowmouse WHERE Id = '$productIdToDelete'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='budget_mouse.php'; alert('Record Deleted Successfully')</script>";
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
    <section>
        <h1>Admin Panel | Budget Mouse</h1>
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
                <label>Product Min dpi</label>
                <input type="text" name="Min_dpi">
            </div>
            <div class="input-field">
                <label>Product max dpi</label>
                <input type="text" name="Max_dpi">
            </div>
            <div class="input-field">
                <label>Product dpi</label>
                <input type="text" name="dpi">
            </div>
            <div class="input-field">
                <label>Product PollingRate</label>
                <input type="text" name="PollingRate">
            </div>
            <div class="input-field">
                <label>Product Connectivity</label>
                <input type="text" name="Connectivity">
            </div>
            <div class="input-field">
                <label>Product Wireless</label>
                <input type="text" name="Wireless">
            </div>
            <div class="input-field">
                <label>Product Warranty</label>
                <input type="text" name="Warranty">
            </div>
            <div class="input-field">
                <label>Product Buttons</label>
                <input type="text" name="Buttons">
            </div>
            <div class="input-field">
                <label>Product SideButtons</label>
                <input type="text" name="SideButtons">
            </div>
            <div class="input-field">
                <label>Product Software</label>
                <input type="text" name="Software">
            </div>
            <div class="input-field">
                <label>Product Orientation</label>
                <input type="text" name="Orientation">
            </div>
            <div class="input-field">
                <label>Product Weight</label>
                <input type="text" name="Weight">
            </div>
            <div class="input-field">
                <label>Product Rgb</label>
                <input type="text" name="Rgb">
            </div>
            <div class="input-field">
                <label>Product CableType</label>
                <input type="text" name="CableType">
            </div>
            <div class="input-field">
                <label>Product CableLength</label>
                <input type="text" name="CableLength">
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
    <div class="line3"></div>
    <div class="line4"></div>
</body>

</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>