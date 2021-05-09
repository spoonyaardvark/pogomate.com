<?php

namespace Pogo\Data\Generated\GamePress;

use Pogo\Data\Manual\FormsAlias;
use Pogo\Pokemon\Mods;
use Pogo\Pokemon;

class GL {
    const DESCRIPTION = 'GamePress Greater League';
    
    const TIERS = [
        'Tier 1' => [
            Pokemon::AZUMARILL,
            Pokemon::STUNFISK | Mods::GALARIAN,
        ],
        'Tier 1.5' => [
            Pokemon::VENUSAUR,
            Pokemon::SKARMORY,
            Pokemon::BASTIODON,
            Pokemon::REGISTEEL,
            Pokemon::TROPIUS,
            Pokemon::ALTARIA,
            Pokemon::SWAMPERT | Mods::SHADOW,
            Pokemon::SABLEYE,
            Pokemon::VENUSAUR | Mods::SHADOW,
            Pokemon::SWAMPERT,
            Pokemon::DEOXYS | FormsAlias::DEOXYS_DEFENSE,
            Pokemon::UMBREON,
            Pokemon::MEGANIUM,
            Pokemon::HYPNO | Mods::SHADOW,
            Pokemon::HYPNO,
            Pokemon::SKARMORY | Mods::SHADOW,
        ],
        'Tier 2' => [
            Pokemon::SIRFETCH_D,
            Pokemon::RAICHU | Mods::ALOLAN,
            Pokemon::POLITOED | Mods::SHADOW,
            Pokemon::ABOMASNOW | Mods::SHADOW,
            Pokemon::ZWELIOUS,
            Pokemon::DIGGERSBY,
            Pokemon::MANDIBUZZ,
            Pokemon::STUNFISK,
            Pokemon::GALVANTULA,
            Pokemon::JELLICENT | FormsAlias::JELLICENT_MALE,
            Pokemon::VICTREEBEL | Mods::SHADOW,
            Pokemon::DRIFBLIM,
            Pokemon::MAROWAK | Mods::ALOLAN,
            Pokemon::SHIFTRY,
            Pokemon::HAUNTER,
            Pokemon::GENGAR,
            Pokemon::LICKITUNG,
            Pokemon::LAPRAS,
            Pokemon::MEW,
            Pokemon::POLITOED,
            Pokemon::VIGOROTH,
            Pokemon::NINETALES | Mods::ALOLAN,
            Pokemon::MEDICHAM,
            Pokemon::WHISCASH,
            Pokemon::DEWGONG,
            Pokemon::TOXICROAK,
            Pokemon::ABOMASNOW,
            Pokemon::PROBOPASS,
            Pokemon::PROBOPASS | Mods::SHADOW,
        ],
        'Tier 2.5' => [
            Pokemon::IVYSAUR,
            Pokemon::WORMADAM | FormsAlias::WORMADAM_TRASH,
            Pokemon::JIRACHI,
            Pokemon::SKUNTANK,
            Pokemon::BRONZONG,
            Pokemon::TOGEKISS,
            Pokemon::GALLADE,
            Pokemon::FROSLASS,
            Pokemon::CRESSELIA,
            Pokemon::MUK | Mods::ALOLAN,
            Pokemon::MELMETAL,
            Pokemon::SCRAFTY,
            Pokemon::PELIPPER,
            Pokemon::FERROTHORN,
            Pokemon::CHERRIM | FormsAlias::CHERRIM_SUNNY,
            Pokemon::IVYSAUR | Mods::SHADOW,
            Pokemon::MAWILE | Mods::SHADOW,
            Pokemon::AROMATISSE,
            Pokemon::SLURPUFF,
            Pokemon::GOODRA,
            Pokemon::MACHAMP | Mods::SHADOW,
            Pokemon::QUAGSIRE | Mods::SHADOW,
            Pokemon::MAWILE,
            Pokemon::MUNCHLAX,
            Pokemon::CLEFABLE,
            Pokemon::NOCTOWL,
            Pokemon::WIGGLYTUFF,
            Pokemon::PRIMEAPE,
            Pokemon::LANTURN,
            Pokemon::JUMPLUFF,
            Pokemon::MANTINE,
            Pokemon::QUAGSIRE,
            Pokemon::VICTREEBEL,
        ],
    ];
}