<?php
class Patience extends Database
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
    private $patience_table = '';


    //View patience info
    public function patienceInfo($condition, $fields = "*", $column = "")
    {
        return $this->lookUp($this->patience_table, $fields, $condition, $column);
    }


    //Count patience info from database
    public function numOfPatienceRows($condition)
    {
        return $this->countRows($this->patience_table, "*", $condition);
    }


    //Check if the parameter exist in the database
    public function isExist($condition)
    {
        return $this->numOfPatienceRows($condition);
    }

    //Validation for patience info
    public function patienceValidation()
    {
        if (Fun::checkForEmptyInput([$this->name, $this->age, $this->contact, $this->department, $this->matric_no, $this->level, $this->course])) {
            Fun::redirect("", "", "");
        }
    }
    //Save patience info imto the database
    public function savePatienceInfo()
    {
        return $this->save($this->patience_table, "");
    }
}
