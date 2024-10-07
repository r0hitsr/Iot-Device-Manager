<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:livedata.php');
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Display</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                        <div>
                            <select name="devices" id="music">
                                <option value="CEMS">CEMS</option>
                                <option value="EQMS">EQMS</option>
                            </select>

                            <h2>Two Equal Columns</h2>

                            <div class="gross-3-ur">
                                <div class="row-myex-2">
                                    <div class="column-row-3" style="background-color:#aaa;">
                                        <h2>Parameters</h2>
                                        <div id="output"></div>
                                        <script>
                                            const deviceSelect = document.getElementById("music");
                                            const outputDiv = document.getElementById("output");

                                            // Function to update output based on selected device
                                            function updateOutput() {
                                                const selectedDevice = deviceSelect.value;
                                                let output = "";

                                                if (selectedDevice === 'CEMS') {
                                                    output += "PM:<br>";
                                                    output += "SOX:<br>";
                                                    output += "NOX:<br>";
                                                    output += "FLOW:<br>";
                                                } else if (selectedDevice === 'EQMS') {
                                                    output += "BOD:<br>";
                                                    output += "COD:<br>";
                                                    output += "Flow:<br>";
                                                    output += "qn:<br>";
                                                }

                                                // Set the output to the div
                                                outputDiv.innerHTML = output;
                                            }

                                            // Add event listener for select change
                                            deviceSelect.addEventListener("change", updateOutput);

                                            // Trigger updateOutput when the page loads
                                            window.addEventListener("load", updateOutput);
                                        </script>
                                    </div>
                                    <div class="column-row-3" style="background-color:#bbb;">
                                        <h2>Measurements Display</h2>
                                        <p>Some text..</p>
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
<?php } ?>