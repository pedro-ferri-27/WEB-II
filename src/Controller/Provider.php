<?php

namespace APP\Controller;


use APP\Model\Provider;
use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Address;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();
    // Redirecionar o usuário
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$providerName = $_POST["name"];
$providerCNPJ = $_POST["cnpj"];
$providerPhone = $_POST["phone"];
$providerPB = $_POST["publicPlace"];
$providerNOF = $_POST["numberOfStreet"];
$providerComp = $_POST["complement"];
$providerNeigh = $_POST["neighborhood"];
$providerCity = $_POST["city"];
$providerZC = $_POST["zipCode"];



$error = array();

if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerCNPJ)){
    array_push($error, "o CNPJ deve conter 14 numeros!!!");
}
if (!Validation::validateNumber($providerPhone)){
    array_push($error, "O telefone deve conter 9 numeros!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}
if (!Validation::validateName($providerName)){
    array_push($error, "O nome fornecedor deve conter mais de 2 caracteres!!!");
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $provider = new Provider(
        name: $providerName,
        cnpj: $providerCNPJ,
        phone: $providerPhone,
        address: new Address(
        publicPlace: $providerPB,
        numberOfStreet: $providerNOF,
        complement: $providerComp,
        neighborhood: $providerZC,
        city: $providerCity,
        zipCode: $providerZC,
        )


    );
    Redirect::redirect(
        message: "O produto $productName foi cadastrado com sucesso!!!"
    );

}