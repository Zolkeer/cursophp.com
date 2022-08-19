<?php

$nome = $_POST['nome'];
$email = $_POST['email'];   

echo "o nome em questão é $nome, e o e-mail em questão é $email <br>";

var_dump($_POST);

// se colocar o button no lugar não aparecerá no var dump //
// não é necessario criar uma váriavel, basta chamar a global get//
