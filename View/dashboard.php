<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title> Dashboard</title>

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="../Style/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body>
    <?php require('../View/top_navbar.php') ?>
    <div class="container">
        <?php require('../View/navbar.php') ?>

        <div class="main-body">
            <div class="promo_card">
                <h1>Welcome <?php if (isset($_POST['email'])) {
                                echo $_POST['email'];
                            } ?></h1>
                
               
            </div>

            <div class="history_lists">


               
                <canvas id="myChart" style="width:100%;max-width:1200px;height:300px;"></canvas>

                <div class="lis t1">
                    <div class="row">
                        <h4>Doctor Details</h4>
                        <a href="#">See all</a>
                    </div>
                    <table class="table table-bordered" id="customers" cellspacing="10">

                        <thead>

                            <tr>


                                <th>ID</th>

                                <th>Name</th>

                                <th>Date of Birth</th>

                                <th>Phone Number</th>

                                <th>Email</th>
                                <th>Doctor Type</th>

                            </tr>

                        </thead>



                        <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "";

                        $dbname = "clinic_management_system";

                        // Create connection

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = 'SELECT * from doctor';

                        if (mysqli_query($conn, $sql)) {

                            echo "";
                        } else {

                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }

                        $count = 1;

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while ($row = mysqli_fetch_assoc($result)) { ?>

                                <tbody>

                                    <tr>

                                        <th>

                                            <?php echo $row['id']; ?>

                                        </th>

                                        <td>

                                            <?php echo $row['name']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['date_of_birth']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['phone']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['email']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['doctor_type']; ?>

                                        </td>
                                    </tr>

                                </tbody>

                        <?php

                                $count++;
                            }
                        } else {

                            echo '0 results';
                        }

                        ?>

                    </table>
                </div>

                <div class="list2">
                    <div class="row">
                        <h4>Patient Details</h4>
                        <a href="#">Upload</a>
                    </div>
                    <table class="table table-bordered" id="custormers" width="100%" cellspacing="10">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Name</th>

                                <th>Level</th>

                                <th>Age</th>

                                <th>Department</th>
                                <th>Program</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Genotype</th>
                                <th>Illness</th>
                                <th>Gender</th>
                                <th>Matric Number</th>

                            </tr>

                        </thead>

                        <?php

                        $servername = "localhost";

                        $username = "root";

                        $password = "";

                        $dbname = "clinic_management_system";

                        // Create connection

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = 'SELECT * from patient';

                        if (mysqli_query($conn, $sql)) {

                            echo "";
                        } else {

                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }

                        $count = 1;

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {

                            // output data of each row

                            while ($row = mysqli_fetch_assoc($result)) { ?>

                                <tbody>

                                    <tr>

                                        <th>

                                            <?php echo $row['id']; ?>

                                        </th>
                                        <td>

                                            <?php echo $row['name']; ?>

                                        </td>
                                        <td>

                                            <?php echo $row['level']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['age']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['department']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['program']; ?>

                                        </td>
                                        <td>

                                            <?php echo $row['email']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['address']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['blood_group']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['genotype']; ?>

                                        </td>

                                        <td>

                                            <?php echo $row['illness']; ?>

                                        </td>
                                        <td>

                                            <?php echo $row['gender']; ?>

                                        </td>
                                        <td>

                                            <?php echo $row['matric_no']; ?>

                                        </td>



                                    </tr>

                                </tbody>

                        <?php

                                $count++;
                            }
                        } else {

                            echo '0 results';
                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <h4>Account Balance</h4>

            <div class="balance">
                <i class="fas fa-dollar icon"></i>
                <div class="info">
                    <h5>Dollar</h5>
                    <span><i class="fas fa-dollar"></i>25,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa-solid fa-rupee-sign icon"></i>
                <div class="info">
                    <h5>PKR</h5>
                    <span><i class="fa-solid fa-rupee-sign"></i>300,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fas fa-euro icon"></i>
                <div class="info">
                    <h5>Euro</h5>
                    <span><i class="fas fa-euro"></i>25,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa-solid fa-indian-rupee-sign icon"></i>
                <div class="info">
                    <h5>INR</h5>
                    <span><i class="fa-solid fa-indian-rupee-sign"></i>220,000.00</span>
                </div>
            </div>

            <div class="balance">
                <i class="fa-solid fa-sterling-sign icon"></i>
                <div class="info">
                    <h5>Pound</h5>
                    <span><i class="fa-solid fa-sterling-sign"></i>30,000.00</span>
                </div>
            </div>

        </div>
    </div>
    <script>
                    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                    var yValues = [55, 49, 44, 24, 15];
                    var barColors = ["red", "green", "blue", "orange", "brown"];

                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "World Wine Production 2018"
                            }
                        }
                    });
                </script>
</body>

</html>