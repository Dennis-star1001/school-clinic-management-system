<?php
class Doctor extends Database
{
    public $name;
    public $date_of_birth;
    public $phone;
    public $email;
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
        if (Fun::checkForEmptyInput([$this->name, $this->date_of_birth, $this->phone, $this->email, $this->doctor_type])) {
            Fun::redirect("", "", "");
        }
    }

    public function processDoctorInfo($name, $date_of_birth, $phone, $email, $doctor_type)
    {
        $this->name = $name;
        $this->date_of_birth = $date_of_birth;
        $this->phone = $phone;
        $this->email = $email;
        $this->doctor_type = $doctor_type;
        $this->saveDoctorInfo();
    }

    //Save Doctor info to database
    public function saveDoctorInfo()
    { 
        //    $doctor->processDoctorInfo($_POST['name'], $_POST['date_of_birth'], $_POST['phone'], $_POST['email'], $_POST['doctor_type']);
        return $this->save($this->doc_table, "name = '$this->name', date_of_birth = '$this->date_of_birth', phone='$this->phone', email = '$this->email', doctor_type='$this->doctor_type'");
    }
}
