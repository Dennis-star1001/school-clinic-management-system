<?php
class Patient extends Database
{
    //Patience datas 
    public $name;
    public $level;
    public $age;
    public $department;
    public $program;
    public $email;
    public $address;
    public $blood_group;
    public $genotype;
    public $illness;
    public $gender;
    public $matric_no;


    //Patience table
    private $patient_table = 'patient';


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
        if (Fun::checkForEmptyInput([$this->name, $this->level,  $this->age, $this->department, $this->email,$this->address, $this->blood_group,$this->illness, $this->gender, $this->matric_no])) {
            Fun::redirect("../../View/patient.php", "err", "None of the fields must be empty");
            exit;
        }
        Fun::redirect("../../View/patient.php", "success", "Data has been saved");
    }

    public function processPatientInfo($name,$level, $age, $department, $program,$email, $address, $blood_group, $genotype, $illness, $gender,$matric_no)
    {
        $this->name = $name;
        $this->level = $level;
        $this->age = $age;
        $this->department = $department;
        $this->program = $program;
        $this->email = $email;
        $this->address = $address;
        $this->blood_group = $blood_group;
        $this->genotype = $genotype;
        $this->illness = $illness;
        $this->gender = $gender;
        $this->matric_no = $matric_no;
        $this->patientsValidation();
        $this->savePatientInfo();
    }

    //Save patience info imto the database
    public function savePatientInfo()
    {
        echo 'name';
        exit;   
        return $this->save($this->patient_table, "name='$this->name', email='$this->email', blood_group='$this->blood_group', genotype='$this->genotype', sickness='$this->sickness', address='$this->address', department='$this->department', program='$this->program', faculty='$this->faculty', age='$this->age', level='$this->level'");
    }
}
