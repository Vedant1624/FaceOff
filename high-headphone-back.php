<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flagship Headphones back</title>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
</head>

<body class="cont">
    <?php
    include('nav.php');
    ?>
    <h1>Compare Flagship Headphones</h1>
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
                    <th>Fit</th>
                    <td id="Fit1">N/A</td>
                    <td id="Fit2">N/A</td>
                </tr>
                <tr>
                    <th>Cable length</th>
                    <td id="CableLength1">N/A</td>
                    <td id="CableLength2">N/A</td>
                </tr>
                <tr>
                    <th>RGB</th>
                    <td id="RGB1">N/A</td>
                    <td id="RGB2">N/A</td>
                </tr>
                <tr>
                    <th>Can be folded</th>
                    <td id="Fold1">N/A</td>
                    <td id="Fold2">N/A</td>
                </tr>
                <tr>
                    <th>Lowest frequency</th>
                    <td id="LowFreq1">N/A</td>
                    <td id="LowFreq2">N/A</td>
                </tr>
                <tr>
                    <th>Highest frequency</th>
                    <td id="HighFreq1">N/A</td>
                    <td id="HighFreq2">N/A</td>
                </tr>
                <tr>
                    <th>ANC</th>
                    <td id="ANC1">N/A</td>
                    <td id="ANC2">N/A</td>
                </tr>
                <tr>
                    <th>Driver unit size</th>
                    <td id="DriverSize1">N/A</td>
                    <td id="DriverSize2">N/A</td>
                </tr>
                <tr>
                    <th>Drivers count</th>
                    <td id="DriverCount1">N/A</td>
                    <td id="DriverCount2">N/A</td>
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
                    <th>Number of microphones</th>
                    <td id="NoMic1">N/A</td>
                    <td id="NoMic2">N/A</td>
                </tr>
                <tr>
                    <th>Has a removable microphone</th>
                    <td id="RemoveMic1">N/A</td>
                    <td id="RemoveMic2">N/A</td>
                </tr>
                <tr>
                    <th>Has a mute function</th>
                    <td id="MuetMic1">N/A</td>
                    <td id="MuetMic2">N/A</td>
                </tr>
                <tr>
                    <th>Highest mic frequency</th>
                    <td id="HighMic1">N/A</td>
                    <td id="HighMic2">N/A</td>
                </tr>
                <tr>
                    <th>Can be used wirelessly</th>
                    <td id="Wireless1">N/A</td>
                    <td id="Wireless2">N/A</td>
                </tr>
                <tr>
                    <th>Dimension</th>
                    <td id="Dimension1">N/A</td>
                    <td id="Dimension2">N/A</td>
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
    
    $sql = "SELECT * FROM highheadphone";
    $result = $conn->query($sql);

    $products = [];

    while ($row = $result->fetch_assoc()) {
        $product = [
            "Id" => $row["Id"],
            "Name" => $row["Name"],
            "Price" => $row["Price"],
            "Weight" => $row["Weight"],
            "Fit" => $row["Fit"],
            "CableLength" => $row["CableLength"],
            "RGB" => $row["RGB"],
            "Fold" => $row["Fold"],
            "LowFreq" => $row["LowFreq"],
            "HighFreq" => $row["HighFreq"],
            "ANC" => $row["ANC"],
            "DriverSize" => $row["DriverSize"],
            "DriverCount" => $row["DriverCount"],
            "Connectivity" => $row["Connectivity"],
            "Warranty" => $row["Warranty"],
            "NoMic" => $row["NoMic"],
            "RemoveMic" => $row["RemoveMic"],
            "MuetMic" => $row["MuteMic"],
            "HighMic" => $row["HighMic"],
            "Wireless" => $row["Wireless"],
            "Dimension" => $row["Dimension"],
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
                document.getElementById("Fit1").innerHTML = productData[a].Fit
                document.getElementById("CableLength1").innerHTML = productData[a].CableLength + "m"
                document.getElementById("RGB1").innerHTML = productData[a].RGB
                document.getElementById("Fold1").innerHTML = productData[a].Fold
                document.getElementById("LowFreq1").innerHTML = productData[a].LowFreq + "Hz"
                document.getElementById("HighFreq1").innerHTML = productData[a].HighFreq + "Hz"
                document.getElementById("ANC1").innerHTML = productData[a].ANC
                document.getElementById("DriverSize1").innerHTML = productData[a].DriverSize + "mm"
                document.getElementById("DriverCount1").innerHTML = productData[a].DriverCount
                document.getElementById("Connectivity1").innerHTML = productData[a].Connectivity + "m"
                document.getElementById("Warranty1").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("NoMic1").innerHTML = productData[a].NoMic
                document.getElementById("RemoveMic1").innerHTML = productData[a].RemoveMic
                document.getElementById("MuetMic1").innerHTML = productData[a].MuetMic
                document.getElementById("HighMic1").innerHTML = productData[a].HighMic + "Hz"
                document.getElementById("Wireless1").innerHTML = productData[a].Wireless
                document.getElementById("Dimension1").innerHTML = productData[a].Dimension + "cm"
                document.getElementById("Url1").setAttribute("href", productData[a].Url);
                

            } else {
                document.getElementById("select1").selectedIndex = 0;
                document.getElementById("Price1").innerHTML = ""
                document.getElementById("Weight1").innerHTML = ""
                document.getElementById("Fit1").innerHTML = ""
                document.getElementById("CableLength1").innerHTML = ""
                document.getElementById("RGB1").innerHTML = ""
                document.getElementById("Fold1").innerHTML = ""
                document.getElementById("LowFreq1").innerHTML = ""
                document.getElementById("HighFreq1").innerHTML = ""
                document.getElementById("ANC1").innerHTML = ""
                document.getElementById("DriverSize1").innerHTML = ""
                document.getElementById("DriverCount1").innerHTML = ""
                document.getElementById("Connectivity1").innerHTML = ""
                document.getElementById("Warranty1").innerHTML = ""
                document.getElementById("NoMic1").innerHTML = ""
                document.getElementById("RemoveMic1").innerHTML = ""
                document.getElementById("MuetMic1").innerHTML = ""
                document.getElementById("HighMic1").innerHTML = ""
                document.getElementById("Wireless1").innerHTML = ""
                document.getElementById("Dimension1").innerHTML = ""
                document.getElementById("Url1").innerHTML = ""
            }
        }

        function item2(a) {
            var select1 = document.getElementById("select1").value;
            if (a != select1) {
                document.getElementById("Price2").innerHTML = "₹ " + productData[a].Price
                document.getElementById("Weight2").innerHTML = productData[a].Weight + "g"
                document.getElementById("Fit2").innerHTML = productData[a].Fit
                document.getElementById("CableLength2").innerHTML = productData[a].CableLength + "m"
                document.getElementById("RGB2").innerHTML = productData[a].RGB
                document.getElementById("Fold2").innerHTML = productData[a].Fold
                document.getElementById("LowFreq2").innerHTML = productData[a].LowFreq + "Hz"
                document.getElementById("HighFreq2").innerHTML = productData[a].HighFreq + "Hz"
                document.getElementById("ANC2").innerHTML = productData[a].ANC
                document.getElementById("DriverSize2").innerHTML = productData[a].DriverSize + "mm"
                document.getElementById("DriverCount2").innerHTML = productData[a].DriverCount
                document.getElementById("Connectivity2").innerHTML = productData[a].Connectivity + "m"
                document.getElementById("Warranty2").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("NoMic2").innerHTML = productData[a].NoMic
                document.getElementById("RemoveMic2").innerHTML = productData[a].RemoveMic
                document.getElementById("MuetMic2").innerHTML = productData[a].MuetMic
                document.getElementById("HighMic2").innerHTML = productData[a].HighMic + "Hz"
                document.getElementById("Wireless2").innerHTML = productData[a].Wireless
                document.getElementById("Dimension2").innerHTML = productData[a].Dimension + "cm"
                document.getElementById("Url2").setAttribute("href", productData[a].Url);
            } else {
                document.getElementById("select2").selectedIndex = 0;
                document.getElementById("Price2").innerHTML = ""
                document.getElementById("Weight2").innerHTML = ""
                document.getElementById("Fit2").innerHTML = ""
                document.getElementById("CableLength2").innerHTML = ""
                document.getElementById("RGB2").innerHTML = ""
                document.getElementById("Fold2").innerHTML = ""
                document.getElementById("LowFreq2").innerHTML = ""
                document.getElementById("HighFreq2").innerHTML = ""
                document.getElementById("ANC2").innerHTML = ""
                document.getElementById("DriverSize2").innerHTML = ""
                document.getElementById("DriverCount2").innerHTML = ""
                document.getElementById("Connectivity2").innerHTML = ""
                document.getElementById("Warranty2").innerHTML = ""
                document.getElementById("NoMic2").innerHTML = ""
                document.getElementById("RemoveMic2").innerHTML = ""
                document.getElementById("MuetMic2").innerHTML = ""
                document.getElementById("HighMic2").innerHTML = ""
                document.getElementById("Wireless2").innerHTML = ""
                document.getElementById("Dimension2").innerHTML = ""
                document.getElementById("Url2").innerHTML = ""
            }
        }
    </script>

</body>

</html>