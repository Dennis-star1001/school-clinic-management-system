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
    <link rel="stylesheet" href="../Style/login.css">
    <title>Document</title>
</head>

<body>

    <div class="body">
        <div class="container">
            <form class="form" action="../Model/Backend/backend.php" method="post">

                <h1 class="title">Doctor Login</h1>
                <?php echo "<div class=$clas>$err</div>" ?>
                <?php echo "<div class=$clas>$success</div>" ?>
                <div class="field_label">
                    <label for="email">Email</label><br>
                    <input type="text" class="input" placeholder="Enter Email" name="email">
                </div>
                <div>
                <div class="field_label">
                    <label for="password">Password</label><br>
                    <input type="password" class="input" placeholder="Enter Password" name="password">
                </div>
                <span><a href="">Forgot password?</a></span>
                </div>
                <input type="submit" value="Login" name="doctor_login_btn" class="doctor_login_btn">
                <span>
                    <p>Don't have an account? <a href="../View/doctor.php">Register</a></p>
                </span>


            </form>
        </div>
    </div>
</body>

</html>