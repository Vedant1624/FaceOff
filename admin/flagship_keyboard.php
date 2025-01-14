<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "compare");

$query = "SELECT * FROM highkeyboard";
$result = mysqli_query($conn, $query);
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="high_keyboard.php">
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
                            <th>Warranty</th>
                            <th>Connectivity</th>
                            <th>Backlit</th>
                            <th>RGB</th>
                            <th>KeyType</th>
                            <th>LockKey</th>
                            <th>TKL</th>
                            <th>Orientation</th>
                            <th>AntiGhosting</th>
                            <th>PowerSource</th>
                            <th>WirelessType</th>
                            <th>HotSwappable</th>
                            <th>Nokey</th>
                            <th>KeyLife</th>
                            <th>Origin</th>
                            <th>Length</th>
                            <th>Width</th>
                            <th>Height</th>
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
                                <td><?php echo $row["Warranty"] ?></td>
                                <td><?php echo $row["Connectivity"] ?></td>
                                <td><?php echo $row["Backlit"] ?></td>
                                <td><?php echo $row["RGB"] ?></td>
                                <td><?php echo $row["KeyType"] ?></td>
                                <td><?php echo $row["LockKey"] ?></td>
                                <td><?php echo $row["TKL"] ?></td>
                                <td><?php echo $row["Orientation"] ?></td>
                                <td><?php echo $row["AntiGhosting"] ?></td>
                                <td><?php echo $row["PowerSource"] ?></td>
                                <td><?php echo $row["WirelessType"] ?></td>
                                <td><?php echo $row["HotSwappable"] ?></td>
                                <td><?php echo $row["Nokey"] ?></td>
                                <td><?php echo $row["KeyLife"] ?></td>
                                <td><?php echo $row["Origin"] ?></td>
                                <td><?php echo $row["Length"] ?></td>
                                <td><?php echo $row["Width"] ?></td>
                                <td><?php echo $row["Height"] ?></td>
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