<?php

namespace Pogo\Data\Gamepress;

use Pogo\Data\Mods;
use Pogo\Pokemon;

class ML
{
    const DESCRIPTION = 'GamePress Master League';
    const RANKS = [
        'Tier 1' => [
            Pokemon::GROUDON,
            Pokemon::DIALGA,
            Pokemon::TOGEKISS
        ],
        'Tier 1.5' => [
            Pokemon::SNORLAX,
            Pokemon::KYOGRE,
            Pokemon::PALKIA,
            Pokemon::GIRATINA | Mods::FORM2,
            Pokemon::GARCHOMP,
            Pokemon::GIRATINA | Mods::FORM1,
            Pokemon::ZEKROM
        ],
        'Tier 2' => [
            Pokemon::DRAGONITE,
            Pokemon::MEWTWO,
            Pokemon::MEW,
            Pokemon::LUGIA,
            Pokemon::SWAMPERT,
            Pokemon::METAGROSS,
            Pokemon::MELMETAL,
            Pokemon::HYDREIGON
        ],
        'Tier 2.5' => [
            Pokemon::MACHAMP,
            Pokemon::REGICE,
            Pokemon::LANDORUS | Mods::FORM2,
            Pokemon::RESHIRAM,
            Pokemon::CONKELDURR,
            Pokemon::DARKRAI,
            Pokemon::HEATRAN,
            Pokemon::MAMOSWINE,
            Pokemon::RHYPERIOR,
            Pokemon::MAGNEZONE,
            Pokemon::LUCARIO,
            Pokemon::LATIOS,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::REGIROCK,
            Pokemon::ZAPDOS,
            Pokemon::HARIYAMA,
            Pokemon::TYRANITAR,
            Pokemon::SUICUNE,
            Pokemon::RAIKOU,
            Pokemon::GYARADOS,
        ]
    ];
}