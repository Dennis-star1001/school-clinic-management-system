<?php
class DoctorLogin extends Doctor
{


    public $result = '';


    public $doc_table = 'doctor';

    public function doctorInfo($condition = "", $field = "*", $column = "")
    {
        return $this->lookUp($this->doc_table, $field, $condition, $column);
    }

    public function singleDoctorInfo($id)
    {
        $this->result = $this->doctorInfo("id = '$id'");
        $this->email = $this->result['email'];
        $this->password = $this->result['password'];
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
        if (Fun::checkForEmptyInput([$this->email, $this->password])) {
            Fun::redirect("../../View/index.php", "err", "None of the fields must be empty");
            exit;
        }


        if (($this->isExist("email = '$this->email'")) && ($this->isExist("password='$this->password'"))) {
            Fun::redirect("../../View/home.php", "success", "Data has been saved");
            exit;
        } else {
            Fun::redirect("../../View/index.php", "err", "Email or Password does not exist");
            exit;
        }
        if (is_numeric($this->name)) {
            Fun::redirect("../../View/index.php", "err", "Name must be in text only!");
            exit;
        }

      


        Fun::redirect("../../View/home.php", "success", "Data has been saved");
    }

    public function processDoctorLoginInfo($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->validation();
    }
}
