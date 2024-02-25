<?php
class Branch{
    public $idb;
    public $name;
    public $location;
    public $listoforphan;
}

class Orphan{
    public $ido;
    public $name;
    public $age;
    public $gender;
    public $amount;

    public function __construct($ido, $name, $age,$gender,$amount){
        $this->ido = $ido;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->amount = $amount;

    }
    public function getAmount() {
        return $this->amount;
    }
}


?>
