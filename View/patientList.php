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

            <div class="right_table">
                <div class="table-responsive">


        <table class="table table-bordered" id="custormers" width="100%" cellspacing="30">

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
</div>
</body>

</html>