<?php
$err = "";
$success = '';
$clas = "empty";
if (isset($_GET['err'])) {
    $err = $_GET['err'];
    $clas = 'error';
} elseif (isset($_GET['success'])) {
    $success = $_GET['success'];
    $clas = 'success';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="../Style/form.css">
</head>

<body>
    <?php 
    // require('../View/navbar.php') 
    ?>


    <div class="container">
        <?php 
        // require('../View/top_navbar.php')
         ?>

        <div class="right_form">
            <form action="../Model/Backend/backend.php" method="post" class='form'>
                <?php echo "<div class=$clas>$err</div>" ?>
                <?php echo "<div class=$clas>$success</div>" ?>
<<<<<<< HEAD
                <h1>Register Doctor</h1>
=======
                <div class="logo">
                     <img src="../assets/oaustech_logo.png" alt="oaustech_logo" width="60px" >
                </div>
               
                <h1 class='title'>Register Doctor</h1>
             
>>>>>>> 532557ff157e55d0d29c5450e8f89967a2d723f5
                <div class="input_fields">
                    <label for="name">Name</label><br>
                    <input type="name" name="name" id="">
                </div>
                <div class="input_fields">
                    <label for="date_of_birth">Date Of Birth</label><br>
                    <input type="Date" name="date_of_birth" id="">
                </div>
                <div class="input_fields">
                    <label for="phone">Phone</label><br>
                    <input type="number" name="phone" id="">
                </div>
                <div class="input_fields">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="">
                </div>
                <div class="input_fields">
                    <label for="doctor_type">Doctor Type</label><br>
                    <input type="text" name="doctor_type" id="">
                </div>
                <div class="btn">
                    <input type="submit" name="btn_doctor" class="btn_doctor" id="btn_doctor">
                </div>
            </form>
        </div>
        <div>
            <img class="image_side" src="../assets/clinic.jpg" alt="kid praying">
        </div>
    </div>
</body>

</html>