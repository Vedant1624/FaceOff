<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Headphone back</title>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
</head>

<body class="cont">
    <?php
    include('nav.php');
    ?>
    <h1>Compare Flagship Keyboard</h1>
    <div class="container">
        <div>
            <table class="table">
                <tr>
                    <th>Select Product</th>
                    <th width="300px">
                        <select class="form" id="select1" onchange="item1(this.value)">
                            <option value="0">-- Select Anyone --</option>
                        </select>
                    </th>
                    <th width="300px">
                        <select class="form" id="select2" onchange="item2(this.value)">
                            <option value="0">-- Select Anyone --</option>
                        </select>
                    </th>
                </tr>

                <tr>
                    <th>Price</th>
                    <td id="Price1">N/A</td>
                    <td id="Price2">N/A</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td id="Weight1">N/A</td>
                    <td id="Weight2">N/A</td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td id="Warranty1">N/A</td>
                    <td id="Warranty2">N/A</td>
                </tr>
                <tr>
                    <th>Connectivity</th>
                    <td id="Connectivity1">N/A</td>
                    <td id="Connectivity2">N/A</td>
                </tr>
                <tr>
                    <th>Backlit</th>
                    <td id="Backlit1">N/A</td>
                    <td id="Backlit2">N/A</td>
                </tr>
                <tr>
                    <th>RGB</th>
                    <td id="RGB1">N/A</td>
                    <td id="RGB2">N/A</td>
                </tr>
                <tr>
                    <th>Type of Key</th>
                    <td id="KeyType1">N/A</td>
                    <td id="KeyType2">N/A</td>
                </tr>
                <tr>
                    <th>Windows Lock key</th>
                    <td id="LockKey1">N/A</td>
                    <td id="LockKey2">N/A</td>
                </tr>
                <tr>
                    <th>Ten Key Less</th>
                    <td id="TKL1">N/A</td>
                    <td id="TKL2">N/A</td>
                </tr>
                <tr>
                    <th>Orientation</th>
                    <td id="Orientation1">N/A</td>
                    <td id="Orientation2">N/A</td>
                </tr>
                <tr>
                    <th>AntiGhosting</th>
                    <td id="AntiGhosting1">N/A</td>
                    <td id="AntiGhosting2">N/A</td>
                </tr>
                <tr>
                    <th>Power Source</th>
                    <td id="PowerSource1">N/A</td>
                    <td id="PowerSource2">N/A</td>
                </tr>
                <tr>
                    <th>Wireless Type</th>
                    <td id="WirelessType1">N/A</td>
                    <td id="WirelessType2">N/A</td>
                </tr>
                <tr>
                    <th>Hot Swappable Keys</th>
                    <td id="HotSwappable1">N/A</td>
                    <td id="HotSwappable2">N/A</td>
                </tr>
                <tr>
                    <th>No of Keys</th>
                    <td id="NoKey1">N/A</td>
                    <td id="NoKey2">N/A</td>
                </tr>
                <tr>
                    <th>Keystrokes life</th>
                    <td id="KeyLife1">N/A</td>
                    <td id="KeyLife2">N/A</td>
                </tr>
                <tr>
                    <th>Origin</th>
                    <td id="Origin1">N/A</td>
                    <td id="Origin2">N/A</td>
                </tr>
                <tr>
                    <th>Length</th>
                    <td id="Length1">N/A</td>
                    <td id="Length2">N/A</td>
                </tr>
                <tr>
                    <th>Width</th>
                    <td id="Width1">N/A</td>
                    <td id="Width2">N/A</td>
                </tr>
                <tr>
                    <th>Height</th>
                    <td id="Height1">N/A</td>
                    <td id="Height2">N/A</td>
                </tr>
                <tr>
                    <th>Buy</th>
                    <td><button type="submit"><a id="Url1" href="#">Shop</a></button></td>
                    <td><button type="submit"><a id="Url2" href="#">Shop</a></button></td>
                </tr>
            </table>

        </div>
    </div>



    <?php
    include('conn.php');

    $sql = "SELECT * FROM highkeyboard";
    $result = $conn->query($sql);

    $products = [];

    while ($row = $result->fetch_assoc()) {
        $product = [
            "Id" => $row["Id"],
            "Name" => $row["Name"],
            "Price" => $row["Price"],
            "Weight" => $row["Weight"],
            "Warranty" => $row["Warranty"],
            "Connectivity" => $row["Connectivity"],
            "Backlit" => $row["Backlit"],
            "RGB" => $row["RGB"],
            "KeyType" => $row["KeyType"],
            "LockKey" => $row["LockKey"],
            "TKL" => $row["TKL"],
            "Orientation" => $row["Orientation"],
            "AntiGhosting" => $row["AntiGhosting"],
            "PowerSource" => $row["PowerSource"],
            "WirelessType" => $row["WirelessType"],
            "HotSwappable" => $row["HotSwappable"],
            "NoKey" => $row["Nokey"],
            "KeyLife" => $row["KeyLife"],
            "Origin" => $row["Origin"],
            "Length" => $row["Length"],
            "Width" => $row["Width"],
            "Height" => $row["Height"],
            "Url" => $row["Url"],
        ];
        $products[] = $product;
    }
    $jsonProducts = json_encode($products, JSON_PRETTY_PRINT);
    $conn->close();
    ?>
    <script>
        var productData = <?php echo $jsonProducts; ?>;
        for (var i = 1; i < productData.length; i++) {
            document.getElementById("select1").innerHTML += `
    <option value="${i}">${productData[i].Name}</option>
    `;
            document.getElementById("select2").innerHTML += `
    <option value="${i}">${productData[i].Name}</option>
    `;
        }

        function item1(a) {
            var select2 = document.getElementById("select2").value;
            if (a != select2) {
                document.getElementById("Price1").innerHTML = "₹ " + productData[a].Price
                document.getElementById("Weight1").innerHTML = productData[a].Weight + "kg"
                document.getElementById("Warranty1").innerHTML = productData[a].Warranty + " Year"
                document.getElementById("Connectivity1").innerHTML = productData[a].Connectivity
                document.getElementById("Backlit1").innerHTML = productData[a].Backlit
                document.getElementById("RGB1").innerHTML = productData[a].RGB
                document.getElementById("KeyType1").innerHTML = productData[a].KeyType
                document.getElementById("LockKey1").innerHTML = productData[a].LockKey
                document.getElementById("TKL1").innerHTML = productData[a].TKL
                document.getElementById("Orientation1").innerHTML = productData[a].Orientation
                document.getElementById("AntiGhosting1").innerHTML = productData[a].AntiGhosting
                document.getElementById("PowerSource1").innerHTML = productData[a].PowerSource
                document.getElementById("WirelessType1").innerHTML = productData[a].WirelessType
                document.getElementById("HotSwappable1").innerHTML = productData[a].HotSwappable
                document.getElementById("NoKey1").innerHTML = productData[a].NoKey
                document.getElementById("KeyLife1").innerHTML = productData[a].KeyLife + " Million"
                document.getElementById("Origin1").innerHTML = productData[a].Origin
                document.getElementById("Length1").innerHTML = productData[a].Length + "cm"
                document.getElementById("Width1").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height1").innerHTML = productData[a].Height + "cm"
                document.getElementById("Url1").setAttribute("href", productData[a].Url);

            } else {
                document.getElementById("select1").selectedIndex = 0;
                document.getElementById("Price1").innerHTML = ""
                document.getElementById("Weight1").innerHTML = ""
                document.getElementById("Warranty1").innerHTML = ""
                document.getElementById("Connectivity1").innerHTML = ""
                document.getElementById("Backlit1").innerHTML = ""
                document.getElementById("RGB1").innerHTML = ""
                document.getElementById("KeyType1").innerHTML = ""
                document.getElementById("LockKey1").innerHTML = ""
                document.getElementById("TKL1").innerHTML = ""
                document.getElementById("Orientation1").innerHTML = ""
                document.getElementById("AntiGhosting1").innerHTML = ""
                document.getElementById("PowerSource1").innerHTML = ""
                document.getElementById("WirelessType1").innerHTML = ""
                document.getElementById("HotSwappable1").innerHTML = ""
                document.getElementById("NoKey1").innerHTML = ""
                document.getElementById("KeyLife1").innerHTML = ""
                document.getElementById("Origin1").innerHTML = ""
                document.getElementById("Length1").innerHTML = ""
                document.getElementById("Width1").innerHTML = ""
                document.getElementById("Height1").innerHTML = ""
                document.getElementById("Url1").innerHTML = ""
            }
        }

        function item2(a) {
            var select1 = document.getElementById("select1").value;
            if (a != select1) {
                document.getElementById("Price2").innerHTML = "₹ " + productData[a].Price
                document.getElementById("Weight2").innerHTML = productData[a].Weight + "kg"
                document.getElementById("Warranty2").innerHTML = productData[a].Warranty + " Year"
                document.getElementById("Connectivity2").innerHTML = productData[a].Connectivity
                document.getElementById("Backlit2").innerHTML = productData[a].Backlit
                document.getElementById("RGB2").innerHTML = productData[a].RGB
                document.getElementById("KeyType2").innerHTML = productData[a].KeyType
                document.getElementById("LockKey2").innerHTML = productData[a].LockKey
                document.getElementById("TKL2").innerHTML = productData[a].TKL
                document.getElementById("Orientation2").innerHTML = productData[a].Orientation
                document.getElementById("AntiGhosting2").innerHTML = productData[a].AntiGhosting
                document.getElementById("PowerSource2").innerHTML = productData[a].PowerSource
                document.getElementById("WirelessType2").innerHTML = productData[a].WirelessType
                document.getElementById("HotSwappable2").innerHTML = productData[a].HotSwappable
                document.getElementById("NoKey2").innerHTML = productData[a].NoKey
                document.getElementById("KeyLife2").innerHTML = productData[a].KeyLife + " Million"
                document.getElementById("Origin2").innerHTML = productData[a].Origin
                document.getElementById("Length2").innerHTML = productData[a].Length + "cm"
                document.getElementById("Width2").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height2").innerHTML = productData[a].Height + "cm"
                document.getElementById("Url2").setAttribute("href", productData[a].Url);
            } else {
                document.getElementById("select2").selectedIndex = 0;
                document.getElementById("Price2").innerHTML = ""
                document.getElementById("Weight2").innerHTML = ""
                document.getElementById("Warranty2").innerHTML = ""
                document.getElementById("Connectivity2").innerHTML = ""
                document.getElementById("Backlit2").innerHTML = ""
                document.getElementById("RGB2").innerHTML = ""
                document.getElementById("KeyType2").innerHTML = ""
                document.getElementById("LockKey2").innerHTML = ""
                document.getElementById("TKL2").innerHTML = ""
                document.getElementById("Orientation2").innerHTML = ""
                document.getElementById("PowerSource2").innerHTML = ""
                document.getElementById("NoAntiGhosting2").innerHTML = ""
                document.getElementById("WirelessType2").innerHTML = ""
                document.getElementById("HotSwappable2").innerHTML = ""
                document.getElementById("NoKey2").innerHTML = ""
                document.getElementById("KeyLife2").innerHTML = ""
                document.getElementById("Origin2").innerHTML = ""
                document.getElementById("Length2").innerHTML = ""
                document.getElementById("Width2").innerHTML = ""
                document.getElementById("Height2").innerHTML = ""
                document.getElementById("Url2").innerHTML = ""
            }
        }
    </script>

</body>

</html>