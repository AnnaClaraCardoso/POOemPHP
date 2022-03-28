<?php
    // requerimento da classe necessária
    require "Person.php"; 

    // instanciando a classe pessoa
    $valdir = new Person;

    $valdir->name = "Valdir Araújo";
    $valdir->cpf = "001.002.003-44";

    echo "Name: ";
    $valdir->tellName();
    echo "<br/>CPF: "
    $valdir->tellCPF();
?>