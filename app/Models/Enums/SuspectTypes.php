<?php

namespace App\Models\Enums;

enum SuspectTypes
{
    case SARGENTO;
    case FLORISTA;
    case ADVOGADO;
    case CHEF_COZINHA;
    case DANCARINA;
    case MEDICA;
    case COVEIRO;
    case MORDOMO;

    public function getName()
    {
        return match ($this) {
            self::SARGENTO     => 'BIGODE',
            self::FLORISTA     => 'DONA BRANCA',
            self::ADVOGADO     => 'SENHOR MARINHO',
            self::CHEF_COZINHA => 'TONY GOURMET',
            self::DANCARINA    => 'SRTA ROSA',
            self::MEDICA       => 'DONA VIOLETA',
            self::COVEIRO      => 'SÉRGIO SOTURNO',
            self::MORDOMO      => 'JAMES',
        };
    }

    public function getColor()
    {
        return match ($this) {
            self::SARGENTO     => __('yellow'),
            self::FLORISTA     => __('white'),
            self::ADVOGADO     => __('green'),
            self::CHEF_COZINHA => __('brown'),
            self::DANCARINA    => __('red'),
            self::MEDICA       => __('pink'),
            self::COVEIRO      => __('black'),
            self::MORDOMO      => __('blue'),
        };
    }

    public function getProfession()
    {
        return match ($this) {
            self::SARGENTO     => $this->name,
            self::FLORISTA     => $this->name,
            self::ADVOGADO     => $this->name,
            self::CHEF_COZINHA => $this->name,
            self::DANCARINA    => $this->name,
            self::MEDICA       => $this->name,
            self::COVEIRO      => $this->name,
            self::MORDOMO      => $this->name,
        };
    }
}