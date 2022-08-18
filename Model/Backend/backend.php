<?php
require('../Database/database.php');
require('../../Controller/Classes/doctor.php');
$doctor = new Doctor();

if ($_POST['btn_doctor']) {
    $doctor->processDoctorInfo($_POST['name'], $_POST['date_of_birth'], $_POST['phone'], $_POST['email'], $_POST['doctor_type']);

}
