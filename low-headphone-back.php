<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Low Headphone back</title>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
</head>

<body class="cont">
    <?php
    include('nav.php');
    ?>
    <h1>Compare Budget Headphones</h1>
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
                    <th>Connection Type</th>
                    <td id="ConnectionType1">N/A</td>
                    <td id="ConnectionType2">N/A</td>
                </tr>
                <tr>
                    <th>RGB</th>
                    <td id="RGB1">N/A</td>
                    <td id="RGB2">N/A</td>
                </tr>
                <tr>
                    <th>Fit</th>
                    <td id="Fit1">N/A</td>
                    <td id="Fit2">N/A</td>
                </tr>
                <tr>
                    <th>Detachable cable</th>
                    <td id="Dcable1">N/A</td>
                    <td id="Dcable2">N/A</td>
                </tr>
                <tr>
                    <th>Can be folded</th>
                    <td id="Fold1">N/A</td>
                    <td id="Fold2">N/A</td>
                </tr>
                <tr>
                    <th>Tangle Free Cable</th>
                    <td id="Tangle1">N/A</td>
                    <td id="Tangle2">N/A</td>
                </tr>
                <tr>
                    <th>Has stereo speakers</th>
                    <td id="Stereo1">N/A</td>
                    <td id="Stereo2">N/A</td>
                </tr>
                <tr>
                    <th>Driver Unit Size</th>
                    <td id="DriverSize1">N/A</td>
                    <td id="DriverSize2">N/A</td>
                </tr>
                <tr>
                    <th>Noise-canceling</th>
                    <td id="Noise1">N/A</td>
                    <td id="Noise2">N/A</td>
                </tr>
                <tr>
                    <th>Drivers count</th>
                    <td id="DriverCount1">N/A</td>
                    <td id="DriverCount2">N/A</td>
                </tr>
                <tr>
                    <th>External Microphone</th>
                    <td id="Mic1">N/A</td>
                    <td id="Mic2">N/A</td>
                </tr>
                <tr>
                    <th>Connectivity</th>
                    <td id="Connectivity1">N/A</td>
                    <td id="Connectivity2">N/A</td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td id="Warranty1">N/A</td>
                    <td id="Warranty2">N/A</td>
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
                    <th>Depth</th>
                    <td id="Depth1">N/A</td>
                    <td id="Depth2">N/A</td>
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

    $sql = "SELECT * FROM lowheadphone";
    $result = $conn->query($sql);

    $products = [];

    while ($row = $result->fetch_assoc()) {
        $product = [
            "Id" => $row["Id"],
            "Name" => $row["Name"],
            "Price" => $row["Price"],
            "Weight" => $row["Weight"],
            "ConnectionType" => $row["ConnectionType"],
            "RGB" => $row["RGB"],
            "Fit" => $row["Fit"],
            "Dcable" => $row["Dcable"],
            "Fold" => $row["Fold"],
            "Tangle" => $row["Tangle"],
            "Stereo" => $row["Stereo"],
            "DriverSize" => $row["DriverSize"],
            "Noise" => $row["Noise"],
            "DriverCount" => $row["DriverCount"],
            "Mic" => $row["Mic"],
            "Connectivity" => $row["Connectivity"],
            "Warranty" => $row["Warranty"],
            "Width" => $row["Width"],
            "Height" => $row["Height"],
            "Depth" => $row["Depth"],
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
                document.getElementById("Weight1").innerHTML = productData[a].Weight + "g"
                document.getElementById("ConnectionType1").innerHTML = productData[a].ConnectionType
                document.getElementById("RGB1").innerHTML = productData[a].RGB
                document.getElementById("Fit1").innerHTML = productData[a].Fit
                document.getElementById("Dcable1").innerHTML = productData[a].Dcable
                document.getElementById("Fold1").innerHTML = productData[a].Fold
                document.getElementById("Tangle1").innerHTML = productData[a].Tangle
                document.getElementById("Stereo1").innerHTML = productData[a].Stereo
                document.getElementById("DriverSize1").innerHTML = productData[a].DriverSize + "mm"
                document.getElementById("Noise1").innerHTML = productData[a].Noise
                document.getElementById("DriverCount1").innerHTML = productData[a].DriverCount
                document.getElementById("Mic1").innerHTML = productData[a].Mic
                document.getElementById("Connectivity1").innerHTML = productData[a].Connectivity
                document.getElementById("Warranty1").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("Width1").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height1").innerHTML = productData[a].Height + "cm"
                document.getElementById("Depth1").innerHTML = productData[a].Depth + "cm"
                document.getElementById("Url1").setAttribute("href", productData[a].Url);

            } else {
                document.getElementById("select1").selectedIndex = 0;
                document.getElementById("Price1").innerHTML = ""
                document.getElementById("Weight1").innerHTML = ""
                document.getElementById("ConnectionType1").innerHTML = ""
                document.getElementById("RGB1").innerHTML = ""
                document.getElementById("Fit1").innerHTML = ""
                document.getElementById("Dcable1").innerHTML = ""
                document.getElementById("Fold1").innerHTML = ""
                document.getElementById("Tangle1").innerHTML = ""
                document.getElementById("Stereo1").innerHTML = ""
                document.getElementById("DriverSize1").innerHTML = ""
                document.getElementById("Noise1").innerHTML = ""
                document.getElementById("DriverCount1").innerHTML = ""
                document.getElementById("Mic1").innerHTML = ""
                document.getElementById("Connectivity1").innerHTML = ""
                document.getElementById("Warranty1").innerHTML = ""
                document.getElementById("Width1").innerHTML = ""
                document.getElementById("Height1").innerHTML = ""
                document.getElementById("Depth1").innerHTML = ""
                document.getElementById("Url1").innerHTML = ""
            }
        }

        function item2(a) {
            var select1 = document.getElementById("select1").value;
            if (a != select1) {
                document.getElementById("Price2").innerHTML = "₹ " + productData[a].Price
                document.getElementById("Weight2").innerHTML = productData[a].Weight + "g"
                document.getElementById("ConnectionType2").innerHTML = productData[a].ConnectionType
                document.getElementById("RGB2").innerHTML = productData[a].RGB
                document.getElementById("Fit2").innerHTML = productData[a].Fit
                document.getElementById("Dcable2").innerHTML = productData[a].Dcable
                document.getElementById("Fold2").innerHTML = productData[a].Fold
                document.getElementById("Tangle2").innerHTML = productData[a].Tangle
                document.getElementById("Stereo2").innerHTML = productData[a].Stereo
                document.getElementById("DriverSize2").innerHTML = productData[a].DriverSize + "mm"
                document.getElementById("Noise2").innerHTML = productData[a].Noise
                document.getElementById("DriverCount2").innerHTML = productData[a].DriverCount
                document.getElementById("Mic2").innerHTML = productData[a].Mic
                document.getElementById("Connectivity2").innerHTML = productData[a].Connectivity
                document.getElementById("Warranty2").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("Width2").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height2").innerHTML = productData[a].Height + "cm"
                document.getElementById("Depth2").innerHTML = productData[a].Depth + "cm"
                document.getElementById("Url2").setAttribute("href", productData[a].Url);
            } else {
                document.getElementById("select2").selectedIndex = 0;
                document.getElementById("Price2").innerHTML = ""
                document.getElementById("Weight2").innerHTML = ""
                document.getElementById("ConnectionType2").innerHTML = ""
                document.getElementById("RGB2").innerHTML = ""
                document.getElementById("Fit2").innerHTML = ""
                document.getElementById("Dcable2").innerHTML = ""
                document.getElementById("Fold2").innerHTML = ""
                document.getElementById("Tangle2").innerHTML = ""
                document.getElementById("Stereo2").innerHTML = ""
                document.getElementById("DriverSize2").innerHTML = ""
                document.getElementById("Noise2").innerHTML = ""
                document.getElementById("DriverCount2").innerHTML = ""
                document.getElementById("Mic2").innerHTML = ""
                document.getElementById("Connectivity2").innerHTML = ""
                document.getElementById("Warranty2").innerHTML = ""
                document.getElementById("Width2").innerHTML = ""
                document.getElementById("Height2").innerHTML = ""
                document.getElementById("Depth2").innerHTML = ""
                document.getElementById("Url2").innerHTML = ""
            }
        }
    </script>

</body>

</html>