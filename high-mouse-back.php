<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flagship Mouse Compare</title>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
</head>

<body class="cont">
    <?php
    include('nav.php');
    ?>
    <h1>Compare Flagship Mouse</h1>
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
                    <th>Minimum DPI</th>
                    <td id="Min_dpi1">N/A</td>
                    <td id="Min_dpi2">N/A</td>
                </tr>
                <tr>
                    <th>Maximum DPI</th>
                    <td id="Max_dpi1">N/A</td>
                    <td id="Max_dpi2">N/A</td>
                </tr>
                <tr>
                    <th>DPI</th>
                    <td id="Dpi1">N/A</td>
                    <td id="Dpi2">N/A</td>
                </tr>
                <tr>
                    <th>PollingRate</th>
                    <td id="PollingRate1">N/A</td>
                    <td id="PollingRate2">N/A</td>
                </tr>
                <tr>
                    <th>Connectivity</th>
                    <td id="Connectivity1">N/A</td>
                    <td id="Connectivity2">N/A</td>
                </tr>
                <tr>
                    <th>Is Wireless</th>
                    <td id="Wireless1">N/A</td>
                    <td id="Wireless2">N/A</td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td id="Warranty1">N/A</td>
                    <td id="Warranty2">N/A</td>
                </tr>
                <tr>
                    <th>No of Buttons</th>
                    <td id="Buttons1">N/A</td>
                    <td id="Buttons2">N/A</td>
                </tr>
                <tr>
                    <th>No of SideButtons</th>
                    <td id="SideButtons1">N/A</td>
                    <td id="SideButtons2">N/A</td>
                </tr>
                <tr>
                    <th>Software Available</th>
                    <td id="Software1">N/A</td>
                    <td id="Software2">N/A</td>
                </tr>
                <tr>
                    <th>Orientation</th>
                    <td id="Orientation1">N/A</td>
                    <td id="Orientation2">N/A</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td id="Weight1">N/A</td>
                    <td id="Weight2">N/A</td>
                </tr>
                <tr>
                    <th>Rgb</th>
                    <td id="Rgb1">N/A</td>
                    <td id="Rgb2">N/A</td>
                </tr>
                <tr>
                    <th>CableType</th>
                    <td id="CableType1">N/A</td>
                    <td id="CableType2">N/A</td>
                </tr>
                <tr>
                    <th>CableLength</th>
                    <td id="CableLength1">N/A</td>
                    <td id="CableLength2">N/A</td>
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

    $sql = "SELECT * FROM highmouse";
    $result = $conn->query($sql);

    $products = [];

    while ($row = $result->fetch_assoc()) {
        $product = [
            "Id" => $row["Id"],
            "Name" => $row["Name"],
            "Price" => $row["Price"],
            "Min_dpi" => $row["Min_dpi"],
            "Max_dpi" => $row["Max_dpi"],
            "Dpi" => $row["Dpi"],
            "PollingRate" => $row["PollingRate"],
            "Connectivity" => $row["Connectivity"],
            "Wireless" => $row["Wireless"],
            "Warranty" => $row["Warranty"],
            "Buttons" => $row["Buttons"],
            "SideButtons" => $row["SideButtons"],
            "Software" => $row["Software"],
            "Orientation" => $row["Orientation"],
            "Weight" => $row["Weight"],
            "Rgb" => $row["Rgb"],
            "CableType" => $row["CableType"],
            "CableLength" => $row["CableLength"],
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
                document.getElementById("Min_dpi1").innerHTML = productData[a].Min_dpi + "DPI"
                document.getElementById("Max_dpi1").innerHTML = productData[a].Max_dpi + "DPI"
                document.getElementById("Dpi1").innerHTML = productData[a].Dpi
                document.getElementById("PollingRate1").innerHTML = productData[a].PollingRate + "HZ"
                document.getElementById("Connectivity1").innerHTML = productData[a].Connectivity
                document.getElementById("Wireless1").innerHTML = productData[a].Wireless
                document.getElementById("Warranty1").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("Buttons1").innerHTML = productData[a].Buttons
                document.getElementById("SideButtons1").innerHTML = productData[a].SideButtons
                document.getElementById("Software1").innerHTML = productData[a].Software
                document.getElementById("Orientation1").innerHTML = productData[a].Orientation
                document.getElementById("Weight1").innerHTML = productData[a].Weight + "g"
                document.getElementById("Rgb1").innerHTML = productData[a].Rgb
                document.getElementById("CableType1").innerHTML = productData[a].CableType
                document.getElementById("CableLength1").innerHTML = productData[a].CableLength + "mm"
                document.getElementById("Length1").innerHTML = productData[a].Length + "cm"
                document.getElementById("Width1").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height1").innerHTML = productData[a].Height + "cm"
                document.getElementById("Url1").setAttribute("href", productData[a].Url);


            } else {
                document.getElementById("select1").selectedIndex = 0;
                document.getElementById("Price1").innerHTML = ""
                document.getElementById("Min_dpi1").innerHTML = ""
                document.getElementById("Max_dpi1").innerHTML = ""
                document.getElementById("Dpi1").innerHTML = ""
                document.getElementById("PollingRate1").innerHTML = ""
                document.getElementById("Connectivity1").innerHTML = ""
                document.getElementById("Wireless1").innerHTML = ""
                document.getElementById("Warranty1").innerHTML = ""
                document.getElementById("Buttons1").innerHTML = ""
                document.getElementById("SideButtons1").innerHTML = ""
                document.getElementById("Software1").innerHTML = ""
                document.getElementById("Orientation1").innerHTML = ""
                document.getElementById("Weight1").innerHTML = ""
                document.getElementById("Rgb1").innerHTML = ""
                document.getElementById("CableType1").innerHTML = ""
                document.getElementById("CableLength1").innerHTML = ""
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
                document.getElementById("Min_dpi2").innerHTML = productData[a].Min_dpi + "DPI"
                document.getElementById("Max_dpi2").innerHTML = productData[a].Max_dpi + "DPI"
                document.getElementById("Dpi2").innerHTML = productData[a].Dpi
                document.getElementById("PollingRate2").innerHTML = productData[a].PollingRate + "HZ"
                document.getElementById("Connectivity2").innerHTML = productData[a].Connectivity
                document.getElementById("Wireless2").innerHTML = productData[a].Wireless
                document.getElementById("Warranty2").innerHTML = productData[a].Warranty + "Year"
                document.getElementById("Buttons2").innerHTML = productData[a].Buttons
                document.getElementById("SideButtons2").innerHTML = productData[a].SideButtons
                document.getElementById("Software2").innerHTML = productData[a].Software
                document.getElementById("Orientation2").innerHTML = productData[a].Orientation
                document.getElementById("Weight2").innerHTML = productData[a].Weight + "g"
                document.getElementById("Rgb2").innerHTML = productData[a].Rgb
                document.getElementById("CableType2").innerHTML = productData[a].CableType
                document.getElementById("CableLength2").innerHTML = productData[a].CableLength + "mm"
                document.getElementById("Length2").innerHTML = productData[a].Length + "cm"
                document.getElementById("Width2").innerHTML = productData[a].Width + "cm"
                document.getElementById("Height2").innerHTML = productData[a].Height + "cm"
                document.getElementById("Url2").setAttribute("href", productData[a].Url);

            } else {
                document.getElementById("select2").selectedIndex = 0;
                document.getElementById("Price2").innerHTML = ""
                document.getElementById("Min_dpi2").innerHTML = ""
                document.getElementById("Max_dpi2").innerHTML = ""
                document.getElementById("Dpi2").innerHTML = ""
                document.getElementById("PollingRate2").innerHTML = ""
                document.getElementById("Connectivity2").innerHTML = ""
                document.getElementById("Wireless2").innerHTML = ""
                document.getElementById("Warranty2").innerHTML = ""
                document.getElementById("Buttons2").innerHTML = ""
                document.getElementById("SideButtons2").innerHTML = ""
                document.getElementById("Software2").innerHTML = ""
                document.getElementById("Orientation2").innerHTML = ""
                document.getElementById("Weight2").innerHTML = ""
                document.getElementById("Rgb2").innerHTML = ""
                document.getElementById("CableType2").innerHTML = ""
                document.getElementById("CableLength2").innerHTML = ""
                document.getElementById("Length2").innerHTML = ""
                document.getElementById("Width2").innerHTML = ""
                document.getElementById("Height2").innerHTML = ""
                document.getElementById("Url2").innerHTML = ""

            }
        }
    </script>

</body>

</html>