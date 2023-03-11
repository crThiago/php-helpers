<?php

use Crthiago\PhpHelpers\Classes\Format;
use Crthiago\PhpHelpers\Classes\Mask;
use Crthiago\PhpHelpers\Classes\Sanitize;
use Crthiago\PhpHelpers\Classes\Validate;

if (!function_exists('validate_cpf')) {
    function validate_cpf(string|int $cpf): bool {
        return Validate::cpf($cpf);
    }
}

if (!function_exists('validate_cnpj')) {
    function validate_cnpj(string|int $cnpj): bool {
        return Validate::cnpj($cnpj);
    }
}

if (!function_exists('money')) {
    function money(
        float|string $number,
        string|bool $prefix = 'R$ ',
        int $decimals = 2,
        string $decimalSeparator = ',',
        string $thousandSeparator = '.'
    ): string {
        return Format::money($number, $prefix, $decimals, $decimalSeparator, $thousandSeparator);
    }
}

if (!function_exists('number_db')) {
    function number_db(string $number, string $thousandSeparator = '.'): float {
        return Format::numberDb($number, $thousandSeparator);
    }
}

if (!function_exists('format_date')) {
    function format_date(string $date, string|null $format = null): string {
        return Format::date($date, $format);
    }
}

if (!function_exists('datetime')) {
    function datetime(string $date, string|null $format = null): string {
        return Format::datetime($date, $format);
    }
}

if (!function_exists('date_db')) {
    function date_db(string $date, string|null $format = null): string {
        return Format::dateDb($date, $format);
    }
}

if (!function_exists('datetime_db')) {
    function datetime_db(string $date, string|null $format = null): string {
        return Format::datetimeDb($date, $format);
    }
}

if (!function_exists('remove_accents')) {
    function remove_accents(string $string): string {
        return Sanitize::removeAccents($string);
    }
}

if (!function_exists('remove_special_characters')) {
    function remove_special_characters(string $string): string {
        return Sanitize::removeSpecialCharacters($string);
    }
}

if (!function_exists('mask_cpf')) {
    function mask_cpf(string|int $cpf): string {
        return Mask::cpf($cpf);
    }
}

if (!function_exists('mask_cnpj')) {
    function mask_cnpj(string|int $cnpj): string {
        return Mask::cnpj($cnpj);
    }
}

if (!function_exists('mask_phone')) {
    function mask_phone(string|int $phone): string {
        return Mask::phone($phone);
    }
}

if (!function_exists('mask_cep')) {
    function mask_cep(string|int $cep): string {
        return Mask::cep($cep);
    }
}

if (!function_exists('mask_custom')) {
    function mask_custom(string $value, string $mask, int|bool $padType = STR_PAD_LEFT): string {
        return Mask::custom($value, $mask, $padType);
    }
}