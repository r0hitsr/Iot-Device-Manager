<?php
session_start();
include_once('../includes/config.php');

if (strlen($_SESSION['adminid']) == 0) {
    header('location:assets.php');
} else {
    // Check if the form is submitted to add a new device
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $company_id = $_POST['company_id'];
        $device_name = $_POST['device_name'];
        $deviceid = $_POST['deviceid'];
        $devicetype = $_POST['devicetype'];
        $device_status = $_POST['device_status'];
        $device_dcrp = $_POST['device_dcrp'];

        $sql = "INSERT INTO devices (company_id, device_name, deviceid, devicetype, device_status, device_dcrp) 
                VALUES ('$company_id', '$device_name', '$deviceid', '$devicetype', '$device_status', '$device_dcrp')";

        if ($con->query($sql) === TRUE) {
            echo "New device added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    // Fetch all devices
    $sql = "SELECT * FROM devices";
    $result = $con->query($sql);

    // Fetch all company IDs
    $company_sql = "SELECT company_id FROM users";
    $company_result = $con->query($company_sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Device Management</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style>
            /* Custom table styles */
            .table-card {
                margin: 20px 0;
            }

            .table thead {
                background-color: #007bff;
                color: white;
            }

            .table tbody tr:nth-child(odd) {
                background-color: #f9f9f9;
            }

            .table tbody tr:nth-child(even) {
                background-color: #ffffff;
            }

            .table tbody tr:hover {
                background-color: #f1f1f1;
            }

            .card-header {
                font-size: 1.5rem;
                font-weight: bold;
            }

            .modal-body {
                background-color: #f8f9fa;
            }

            .modal-header {
                background-color: #007bff;
                color: white;
            }

            .modal-header .btn-close {
                filter: brightness(3);
            }
        </style>
    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- Card for the table -->
                        <div class="card table-card">
                            <div class="card-header">
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Manage Devices</li>
                                </ol>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Company ID</th>
                                            <th>Device Name</th>
                                            <th>Device ID</th>
                                            <th>Device Type</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                <td>" . $row["id"] . "</td>
                                                <td>" . $row["company_id"] . "</td>
                                                <td>" . $row["device_name"] . "</td>
                                                <td>" . $row["deviceid"] . "</td>
                                                <td>" . $row["devicetype"] . "</td>
                                                <td>" . $row["device_status"] . "</td>
                                                <td>" . $row["device_dcrp"] . "</td>
                                              </tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>No devices found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Button to trigger the modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDeviceModal">
                            Add a New Device
                        </button>

                        <!-- Modal for adding a new device -->
                        <div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addDeviceModalLabel">Add a New Device</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="">
                                            <div class="mb-3">
                                                <label for="company_id" class="form-label">Company ID</label>
                                                <select class="form-select" id="company_id" name="company_id" required>
                                                    <option value="" disabled selected>Select Company</option>
                                                    <?php
                                                    if ($company_result->num_rows > 0) {
                                                        while ($company_row = $company_result->fetch_assoc()) {
                                                            echo "<option value='" . $company_row['company_id'] . "'>" . $company_row['company_id'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="device_name" class="form-label">Device Name</label>
                                                <input type="text" class="form-control" id="device_name" name="device_name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="deviceid" class="form-label">Device ID</label>
                                                <input type="text" class="form-control" id="deviceid" name="deviceid" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="devicetype" class="form-label">Device Type</label>
                                                <input type="text" class="form-control" id="devicetype" name="devicetype" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="device_status" class="form-label">Status</label>
                                                <select class="form-select" id="device_status" name="device_status" required>
                                                    <option value="ON">ON</option>
                                                    <option value="OFF">OFF</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="device_dcrp" class="form-label">Description</label>
                                                <textarea class="form-control" id="device_dcrp" name="device_dcrp" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Add Device</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once('../includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>

    </html>

<?php
    $con->close();
}
?>