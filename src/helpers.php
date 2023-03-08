<?php

use Crthiago\PhpHelpers\Classes\Validate;

if (!function_exists('validate_cpf')) {
    function validate_cpf($cpf) {
        return Validate::cpf($cpf);
    }
}

if (!function_exists('validate_cnpj')) {
    function validate_cnpj($cnpj) {
        return Validate::cnpj($cnpj);
    }
}