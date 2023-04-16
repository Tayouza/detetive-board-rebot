<?php

namespace App\Models\Enums;

enum WeaponTypes: string
{
    case FACA         = 'FACA';
    case SOCO_INGLES  = 'SOCO INGLÊS';
    case PE_DE_CABRA  = 'PÉ DE CABRA';
    case TESOURA      = 'TESOURA';
    case PA           = 'PÁ';
    case ARMA_QUIMICA = 'ARMA QUÍMICA';
    case VENENO       = 'VENENO';
    case ESPINGARDA   = 'ESPINGARDA';
}