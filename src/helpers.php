<?php

use Crthiago\PhpHelpers\Classes\Format;
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