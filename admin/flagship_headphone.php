<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "compare");

$query = "SELECT * FROM highheadphone";
$result = mysqli_query($conn, $query);
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="high_headphone.php">
                <h6 class="m-0 font-weight-bold text-primary">CRUD Operations
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                        Edit Table
                    </button>
                </h6>
            </a>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Fit</th>
                            <th>CableLength</th>
                            <th>RGB</th>
                            <th>Fold</th>
                            <th>LowFreq</th>
                            <th>HighFreq</th>
                            <th>ANC</th>
                            <th>DriverSize</th>
                            <th>DriverCount</th>
                            <th>Connectivity</th>
                            <th>Warranty</th>
                            <th>NoMic</th>
                            <th>RemoveMic</th>
                            <th>MuteMic</th>
                            <th>HighMic</th>
                            <th>Wireless</th>
                            <th>Dimension</th>
                            <th>Url</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row["Id"] ?></td>
                                <td><?php echo $row["Name"] ?></td>
                                <td><?php echo $row["Price"] ?></td>
                                <td><?php echo $row["Weight"] ?></td>
                                <td><?php echo $row["Fit"] ?></td>
                                <td><?php echo $row["CableLength"] ?></td>
                                <td><?php echo $row["RGB"] ?></td>
                                <td><?php echo $row["Fold"] ?></td>
                                <td><?php echo $row["LowFreq"] ?></td>
                                <td><?php echo $row["HighFreq"] ?></td>
                                <td><?php echo $row["ANC"] ?></td>
                                <td><?php echo $row["DriverSize"] ?></td>
                                <td><?php echo $row["DriverCount"] ?></td>
                                <td><?php echo $row["Connectivity"] ?></td>
                                <td><?php echo $row["Warranty"] ?></td>
                                <td><?php echo $row["NoMic"] ?></td>
                                <td><?php echo $row["RemoveMic"] ?></td>
                                <td><?php echo $row["MuteMic"] ?></td>
                                <td><?php echo $row["HighMic"] ?></td>
                                <td><?php echo $row["Wireless"] ?></td>
                                <td><?php echo $row["Dimension"] ?></td>
                                <td><?php echo $row["Url"] ?></td>
                        </tr>
                    <?php
                            }

                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>




    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>