<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php require('../View/navbar.php') ?>
        <div class="main">
            <?php require('../View/top_navbar.php') ?>
            <div class="right">
            <div class="right_container">
                <div class="table-responsive">

                    <table class="table table-bordered" id="customers" cellspacing="50">

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
            </div>
            </div>
        </div>
    </div>
</body>

</html>