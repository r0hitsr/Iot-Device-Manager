<?php
session_start();
include_once('includes/config.php');

// Redirect to assets.php if the user is not logged in
if (strlen($_SESSION['id']) == 0) {
    header('location:assets.php');
    exit; // It's a good practice to exit after a header redirection
} else {
    // Fetch company_id from the session
    $company_id = $_SESSION['company_id'];

    // Fetch devices from the database based on the logged-in user's company_id
    $devices_query = mysqli_query($con, "SELECT * FROM devices WHERE company_id = '$company_id'");

    // Check for any SQL errors
    if (!$devices_query) {
        echo "Database query failed: " . mysqli_error($con);
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Manage Devices | Registration and Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once('includes/navbar.php'); ?>
    <div id="layoutSidenav">
        <?php include_once('includes/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Devices</h1>
                    <!-- Display Devices Section -->
                    <div id="displayDevicesSection">
                        <h2>Devices List</h2>

                        <?php if (mysqli_num_rows($devices_query) > 0) { ?>
                            <!-- Display the devices in a table if found -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Device Name</th>
                                        <th>Device ID</th>
                                        <th>Device Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    while ($row = mysqli_fetch_array($devices_query)) { ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo htmlspecialchars($row['device_name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['deviceid']); ?></td>
                                            <td><?php echo htmlspecialchars($row['devicetype']); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <!-- Show a message if no devices are found -->
                            <div class="alert alert-info">
                                No devices found for your company.
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </main>
            <?php include('includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>

<?php } ?>
