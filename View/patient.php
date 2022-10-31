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
    <title>Document</title>
    <link rel="stylesheet" href="../Style/form.css">
</head>

<body>
    <?php
    //  require('../View/navbar.php') 
    ?>
    <div class="container">
        <?php
        // require('../View/top_navbar.php')    
        ?>

        <!-- <div class="patient_form"> -->
        <form action="../Model/Backend/backend.php" method="post" class='patient_form'>


            <div class="logo">
                <img src="../assets/oaustech_logo.png" alt="oaustech_logo" width="60px">
            </div>

            <h1 class='title'>Register Patient</h1>
            <?php echo "<div class=$clas>$err</div>" ?>
            <?php echo "<div class=$clas>$success</div>" ?>
            <div class="form_grid">
                <div class="input_fields">
                    <label for="name">Name</label><br>
                    <input type="name" name="name" id="">
                </div>
                

                <div class="input_fields">
                    <label for="level">Level</label><br>
                    <input type="text" name="level" id="">
                </div>
                <div class="input_fields">
                    <label for="age">Age</label><br>
                    <input type="number" name="age" id="">
                </div>
                <div class="input_fields">
                    <label for="department">Department</label><br>
                    <input type="department" name="department" id="">
                </div>
                <div class="input_fields">
                    <label for="program">Program</label><br>
                    <input type="text" name="program" id="">
                </div>
              
                <div class="input_fields">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="">
                </div>
                <div class="input_fields">
                    <label for="address">Address</label><br>
                    <input type="text" name="address" id="">
                </div>
                <div class="input_fields">
                    <label for="blood_group">Blood group</label><br>
                    <input type="text" name="blood_group" id="">
                </div>
                <div class="input_fields">
                    <label for="genotype">Genotype</label><br>
                    <input type="text" name="genotype" id="">
                </div>
                <div class="input_fields">
                    <label for="illness">Illness</label><br>
                    <input type="text" name="illness" id="">
                </div>
               
                <div class="input_fields gender_field">
                    <label for="Gender">Gender</label><br>
                    <select name="" id="">
                        <option class="input" name="gender" value="">Male</option>
                        <option  class="input" value="" name="gender">Female</option>
                    </select>
                </div>
                <div class="input_fields">
                    <label for="matric_no">Matric Number</label><br>
                    <input type="text" name="matric_no" id="">
                </div>
            </div>
            <div class="btn">
                <input type="submit" name="btn_patient" class="btn_patient" id="btn_patient">
            </div>
        </form>
        <!-- </div> -->
        <div class='patient_img'>
            <img class="image_side_patient" src="../assets/patient.jpg" alt="kid praying">
        </div>
    </div>
</body>

</html>