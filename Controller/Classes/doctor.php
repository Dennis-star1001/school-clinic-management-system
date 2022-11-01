<?php
class Doctor extends Database
{
    public $name;
    public $date_of_birth;
    public $phone;
    public $email;
    public $password;
    public $doctor_type;

    public $result = '';


    public $doc_table = 'doctor';

    public function doctorInfo($condition = "", $field = "*", $column = "")
    {
        return $this->lookUp($this->doc_table, $field, $condition, $column);
    }

    public function singleDoctorInfo($id)
    {
        $this->result = $this->doctorInfo("id = '$id'");
        $this->name = $this->result['name'];
        $this->date_of_birth = $this->result['date_of_birth'];
        $this->phone = $this->result['phone'];
        $this->email = $this->result['email'];
        $this->doctor_type = $this->result['doctor_type'];
    }

    public function numOfDoctorRows($condition)
    {
        return $this->countRows($this->doc_table, "*", $condition);
    }

    public function isExist($condition)
    {
        return $this->numOfDoctorRows($condition);
    }

    public function validation()
    {
        if (Fun::checkForEmptyInput([$this->name, $this->date_of_birth, $this->phone, $this->email, $this->doctor_type, $this->password])) {
            Fun::redirect("../../View/doctor.php", "err", "None of the fields must be empty");
            exit;
        }
        if (($this->isExist("name = '$this->name'")) && ($this->isExist("email = '$this->email'"))) {
            Fun::redirect("../../View/doctor.php", "err", "This name or email already exists!");
            exit;
        }

        if (strlen($this->password) < 8) {
            Fun::redirect("../../View/doctor.php", "err", "Your Password Must Contain At Least 8 Characters!");
            exit;
        }

        if (!preg_match('@[A-Z]@', $this->password)) {
            Fun::redirect("../../View/doctor.php", "err", "Your Password Must Contain At Least 1 Capital Letter!");
            exit;
        }

        if (!preg_match('@[a-z]@', $this->password)) {
            Fun::redirect("../../View/doctor.php", "err", "Your Password Must Contain At Least 1 Lowercase Letter!");
            exit;
        }

        if (!preg_match('@[0-9]@', $this->password)) {
            Fun::redirect("../../View/doctor.php", "err", "Your Password Must Contain At Least A Number!");
            exit;
        }

        Fun::redirect("../../View/index.php", "success", "Data has been saved");
    }

    public function processDoctorInfo($name, $date_of_birth, $phone, $email, $doctor_type, $password)
    {
        $this->name = $name;
        $this->date_of_birth = $date_of_birth;
        $this->phone = $phone;
        $this->email = $email;
        $this->doctor_type = $doctor_type;
        $this->password = $password;
        $this->validation();
        $this->saveDoctorInfo();
    }

    //Save Doctor info to database
    public function saveDoctorInfo()
    {

      
        return $this->save($this->doc_table, "name = '$this->name', date_of_birth = '$this->date_of_birth', phone='$this->phone', email = '$this->email', doctor_type='$this->doctor_type', password ='$this->password'");
    }
}
