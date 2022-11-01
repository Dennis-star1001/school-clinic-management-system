<?php
require('../Database/database.php');

require('../../Controller/Classes/doctor.php');
require('../../Controller/Classes/doctorLogin.php');
require('../../Controller/Classes/patient.php');
require('../../Controller/commonFunctions/functions.php ');

$doctor = new Doctor();
$patient = new Patient();
$doctorlogin = new DoctorLogin();

if (isset($_POST['btn_doctor'])) {
    $doctor->processDoctorInfo($_POST['name'], $_POST['date_of_birth'], $_POST['phone'], $_POST['email'], $_POST['doctor_type'], $_POST['password']);
}

if (isset($_POST['btn_patient'])) {
    $patient->processPatientInfo($_POST['name'], $_POST['level'], $_POST['age'], $_POST['department'], $_POST['program'], $_POST['email'], $_POST['address'], $_POST['blood_group'], $_POST['genotype'], $_POST['illness'], $_POST['gender'], $_POST['matric_no']);
}
if (isset($_POST['doctor_login_btn'])) {

    $doctorlogin->processDoctorLoginInfo($_POST['email'], $_POST['password']);
}
