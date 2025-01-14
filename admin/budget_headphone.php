<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "compare");

$query = "SELECT * FROM lowheadphone";
$result = mysqli_query($conn, $query);
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="low_headphone.php">
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
                            <th>ConnectionType</th>
                            <th>RGB</th>
                            <th>Dcable</th>
                            <th>Fold</th>
                            <th>Tangle</th>
                            <th>Stereo</th>
                            <th>DriverSize</th>
                            <th>Noise</th>
                            <th>DriverCount</th>
                            <th>Mic</th>
                            <th>Connectivity</th>
                            <th>Warranty</th>
                            <th>Width</th>
                            <th>Height</th>
                            <th>Depth</th>
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
                                <td><?php echo $row["ConnectionType"] ?></td>
                                <td><?php echo $row["RGB"] ?></td>
                                <td><?php echo $row["Dcable"] ?></td>
                                <td><?php echo $row["Fold"] ?></td>
                                <td><?php echo $row["Tangle"] ?></td>
                                <td><?php echo $row["Stereo"] ?></td>
                                <td><?php echo $row["DriverSize"] ?></td>
                                <td><?php echo $row["Noise"] ?></td>
                                <td><?php echo $row["DriverCount"] ?></td>
                                <td><?php echo $row["Mic"] ?></td>
                                <td><?php echo $row["Connectivity"] ?></td>
                                <td><?php echo $row["Warranty"] ?></td>
                                <td><?php echo $row["Width"] ?></td>
                                <td><?php echo $row["Height"] ?></td>
                                <td><?php echo $row["Depth"] ?></td>
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