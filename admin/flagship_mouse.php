<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "compare");

$query = "SELECT * FROM highmouse";
$result = mysqli_query($conn, $query);
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <a href="high_mouse.php">
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
                            <th>Min_dpi</th>
                            <th>Max_dpi</th>
                            <th>Dpi</th>
                            <th>PollingRate</th>
                            <th>Connectivity</th>
                            <th>Wireless</th>
                            <th>Warranty</th>
                            <th>Buttons</th>
                            <th>SideButtons</th>
                            <th>Software</th>
                            <th>Orientation</th>
                            <th>Weight</th>
                            <th>Rgb</th>
                            <th>CableType</th>
                            <th>CableLength</th>
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
                                <td><?php echo $row["Min_dpi"] ?></td>
                                <td><?php echo $row["Max_dpi"] ?></td>
                                <td><?php echo $row["Dpi"] ?></td>
                                <td><?php echo $row["PollingRate"] ?></td>
                                <td><?php echo $row["Connectivity"] ?></td>
                                <td><?php echo $row["Wireless"] ?></td>
                                <td><?php echo $row["Warranty"] ?></td>
                                <td><?php echo $row["Buttons"] ?></td>
                                <td><?php echo $row["SideButtons"] ?></td>
                                <td><?php echo $row["Software"] ?></td>
                                <td><?php echo $row["Orientation"] ?></td>
                                <td><?php echo $row["Weight"] ?></td>
                                <td><?php echo $row["Rgb"] ?></td>
                                <td><?php echo $row["CableType"] ?></td>
                                <td><?php echo $row["CableLength"] ?></td>
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