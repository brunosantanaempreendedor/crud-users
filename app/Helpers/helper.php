<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

function format_currency($value)
{
    return number_format($value, 2, ',', '.');
}

function greting()
{
    $time = Carbon::now()->format('H:i:s');

    if ($time >= '00:00:00' && $time <= '12:00:00') {
        return "Bom dia, ";
    } elseif ($time >= '12:00:00' && $time <= '18:00:00') {
        return "Boa tarde, ";
    } else {
        return "Boa noite, ";
    }
}

function getTodayOfWeek()
{
    setlocale(LC_TIME, 'pt_BR.utf-8');
    return strftime('%A');
}

function getCurrentMonth()
{
    setlocale(LC_TIME, 'pt_BR.utf-8');
    return strftime('%B');
}

function limiterCaracter($value, $limit)
{
    return mb_strimwidth($value, 0, $limit, "...");
}

function makeLowerCase($value)
{
    return mb_strtolower($value);
}

function limitArray($value, $length)
{
    $arrayValue = $value->toArray();

    return array_slice($arrayValue, 0, $length);
}


function formatDateTimeToView($data)
{
    return Carbon::parse($data)->format('d/m/Y H:m');
}

function formatDateMonth($data)
{
    return Carbon::parse($data)->format('m/Y');
}

function getDayOfWeek($data)
{
    setlocale(LC_TIME, 'pt_BR.utf-8');
    return strftime('%A', strtotime($data)) . '-feira';
}

function getColor($value)
{
    switch ($value) {
        case 'C':
            return "green";
        case 'A':
            return "red";
        default:
            return "yellow";
    }
}

function getTypeProperty($value)
{
    switch ($value) {
        case 'S':
            return "Venda";
        case 'R':
            return "Locação";
        default:
            return "Ambos";
    }
}

function checkMethod($value)
{
    switch ($value) {
        case '1':
            return "success";
        case '2':
            return "info";
        case '3':
            return "danger";
        default:
            return "secondary";
    }
}

function formatDateToView($data)
{
    return date('d/m/Y', strtotime($data));
}

function formatHourToView($data)
{
    return date('H:m', strtotime($data));
}

function textUppercase($value)
{
    return ucwords($value);
}

function firstLetter($value)
{
    return textUppercase(substr($value, 0, 1));
}

function host()
{
    return $_SERVER['HTTP_HOST'];
}

function firstName($value)
{
    $array = explode(" ", $value);
    return $array[0];
}

function tel($value)
{
    return preg_replace("/[^0-9]/", "", $value);
}

function formatPhone($phoneNumber)
{
    // Remove caracteres não numéricos
    $phoneNumber = preg_replace('/\D/', '', $phoneNumber);

    // Adiciona o código do país (55) se estiver ausente e o número tiver 10 ou 11 dígitos
    if (strlen($phoneNumber) == 10 || strlen($phoneNumber) == 11) {
        $phoneNumber = '55' . $phoneNumber;
    }

    // Verifica se o número tem 12 dígitos (fixo) ou 13 dígitos (celular) considerando o código do país
    if (strlen($phoneNumber) == 12) {
        // Número fixo: +55 (XX) XXXX-XXXX
        $formattedPhoneNumber = sprintf(
            '+%d (%d) %d-%d',
            substr($phoneNumber, 0, 2),   // Código do país
            substr($phoneNumber, 2, 2),   // Código de área
            substr($phoneNumber, 4, 4),   // Parte 1
            substr($phoneNumber, 8, 4)    // Parte 2
        );
    } elseif (strlen($phoneNumber) == 13) {
        // Número celular: +55 (XX) XXXXX-XXXX
        $formattedPhoneNumber = sprintf(
            '+%d (%d) %d-%d',
            substr($phoneNumber, 0, 2),   // Código do país
            substr($phoneNumber, 2, 2),   // Código de área
            substr($phoneNumber, 4, 5),   // Parte 1
            substr($phoneNumber, 9, 4)    // Parte 2
        );
    } else {
        // Retorna o número original se o formato não for válido
        return $phoneNumber;
    }

    return $formattedPhoneNumber;
}

function formatCpfCnpj($number)
{
    $cleanedNumber = preg_replace('/[^0-9]/', '', $number);

    if (strlen($cleanedNumber) == 11) {
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cleanedNumber);
    } elseif (strlen($cleanedNumber) == 14) {
        return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cleanedNumber);
    }
}
function formatPhoneNumber($phoneNumber)
{
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

    if (strlen($phoneNumber) != 10 && strlen($phoneNumber) != 11) {
        return "Número inválido";
    }

    if (strlen($phoneNumber) == 10) {
        return '(' . substr($phoneNumber, 0, 2) . ') ' . substr($phoneNumber, 2, 4) . '-' . substr($phoneNumber, 6);
    } else {
        return '(' . substr($phoneNumber, 0, 2) . ') ' . substr($phoneNumber, 2, 5) . '-' . substr($phoneNumber, 7);
    }
}

function cutString($input)
{
    $parts = explode("-", $input);

    return $parts[0];
}

function getTypeStatus($value)
{
    switch ($value) {
        case 'M':
            return "Morno";
        case 'F':
            return "Frio";
        case 'Q':
            return "Quente";
        default:
            return "Opção inválida";
    }
}

function getColorTypeStatus($value)
{
    switch ($value) {
        case 'M':
            return "secondary";
        case 'F':
            return "info";
        case 'Q':
            return "danger";
        default:
            return "Opção inválida";
    }
}

function convertSituation($value)
{
    switch ($value) {
        case 'Y':
            return "Pago pelo aluno";
        case 'N':
            return "Pendente";
        default:
            return "Opção inválida";
    }
}

function checkActive($value)
{
    switch ($value) {
        case 'Y':
            return "Ativo";
        case 'N':
            return "Inativo";
        default:
            return "Opção inválida";
    }
}

function checkIbio($value)
{
    switch ($value) {
        case 'Y':
            return "Sim";
        case 'N':
            return "Não";
        default:
            return "Opção inválida";
    }
}

function checkBackgroundColor($value)
{
    switch ($value) {
        case 'C':
            return "#228B22";
        case 'A':
            return "#A52A2A	";
        default:
            return "#4682B4";
    }
}

function checkColor($value)
{
    switch ($value) {
        case 'C':
            return "#fff";
        case 'A':
            return "#fff";
        default:
            return "#fff";
    }
}

function checkPeople($value)
{
    switch ($value) {
        case 'Y':
            return "Pessoa jurídica";
        case 'N':
            return "Pessoa Física";
        default:
            return "Opção inválida";
    }
}

function checkGender($value)
{
    switch ($value) {
        case 'Y':
            return "Masculino";
        case 'N':
            return "Feminino";
        default:
            return "Opção inválida";
    }
}

function checkEnum($value)
{
    switch ($value) {
        case 'Y':
            return "Sim";
        case 'N':
            return "Não";
        default:
            return "Opção inválida";
    }
}

function checkStatusCalender($value)
{
    switch ($value) {
        case 'C':
            return "Concluído";
        case 'A':
            return "Ausente";
        default:
            return "Não concluído";
    }
}

function checkStatusCalenderGeneral($value)
{
    switch ($value) {
        case 'F':
            return "Finalizado";
        case 'P':
            return "Em progresso";
        default:
            return "Cancelado";
    }
}

function slug($value)
{
    return Str::slug($value);
}

function convertMaritalStatus($value)
{
    switch ($value) {
        case 0:
            return "Solteiro";
        case 1:
            return "Casado";
        case 2:
            return "Divorciado";
        case 3:
            return "Convivente";
        case 4:
            return "Viúvo";
        default:
            return "Selecione uma opção";
    }
}

function getPermission($value)
{
    switch ($value) {
        case 1:
            return "Administrador";
        case 2:
            return "Recepção";
        case 3:
            return "Corretor";
        default:
            return "Selecione uma opção";
    }
}

function checkNacionality($value)
{
    switch ($value) {
        case 0:
            return "Brasileiro";
        case 1:
            return "Naturalizado";
        case 2:
            return "Estrangeiro";
        default:
            return "Selecione uma opção";
    }
}
