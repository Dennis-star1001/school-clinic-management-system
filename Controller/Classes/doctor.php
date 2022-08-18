<?php
class Doctor extends Database
{
    private $name;
    private $age;
    private $contact;
    private $role;



    private $doc_table = '';

    public function doctorInfo($condition, $fields = "*", $column = "")
    {
        return $this->lookUp($this->doc_table, $fields, $condition, $column);
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
        if(Fun::checkForEmptyInput([$this->name, $this->age, $this->contact, $this->role])){
            Fun::redirect("","","");
        }
        
    }
}
