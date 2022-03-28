<?php 

class Person {
    public $name;
    public $cpf;
    
    public function tellName() {
        echo $this->name;
    }

    public function tellCPF() {
        echo $this->$cpf;
    }
}

?>