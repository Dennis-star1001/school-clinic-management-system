<?php
class Patient extends Database
{
    //Patience datas 
    private $name;
    private $age;
    private $contact;
    private $department;
    private $matric_no;
    private $level;
    private $course;


    //Patience table
    private $patient_table = '';


    //View patience info
    public function patientInfo($condition, $fields = "*", $column = "")
    {
        return $this->lookUp($this->patient_table, $fields, $condition, $column);
    }


    //Count patience info from database
    public function numOfPatientRows($condition)
    {
        return $this->countRows($this->patient_table, "*", $condition);
    }


    //Check if the parameter exist in the database
    public function isExist($condition)
    {
        return $this->numOfPatientRows($condition);
    }

    //Validation for patience info
    public function patientsValidation()
    {
        if (Fun::checkForEmptyInput([$this->name, $this->age, $this->contact, $this->department, $this->matric_no, $this->level, $this->course])) {
            Fun::redirect("", "", "");
        }
    }
    //Save patience info imto the database
    public function savePatientInfo()
    {
        return $this->save($this->patient_table, "");
    }
}
