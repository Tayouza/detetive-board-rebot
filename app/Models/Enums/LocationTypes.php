<?php

namespace App\Models\Enums;

enum LocationTypes: string
{
    case RESTAURANTE   = 'RESTAURANTE';
    case PREFEITURA    = 'PREFEITURA';
    case BANCO         = 'BANCO';
    case HOSPITAL      = 'HOSPITAL';
    case FLORICULTURA  = 'FLORICULTURA';
    case PRACA_CENTRAL = 'PRAÇA CENTRAL';
    case MANSAO        = 'MANSÃO';
    case HOTEL         = 'HOTEL';
    case CEMITERIO     = 'CEMITÉRIO';
    case ESTACAO_TREM  = 'ESTAÇÃO DO TREM';
    case BOATE         = 'BOATE';
}