<?php

namespace Pogo\Data;

use Pogo\Pokemon;

class Evolve
{
    const EVOLVE_FROM = [
        Pokemon::BULBASAUR => null,
        Pokemon::IVYSAUR => Pokemon::BULBASAUR,
        Pokemon::VENUSAUR => Pokemon::IVYSAUR,
        Pokemon::CHARMANDER => null,
        Pokemon::CHARMELEON => Pokemon::CHARMANDER,
        Pokemon::CHARIZARD => Pokemon::CHARMELEON,
        Pokemon::SQUIRTLE => null,
        Pokemon::WARTORTLE => Pokemon::SQUIRTLE,
        Pokemon::BLASTOISE => Pokemon::WARTORTLE,
        Pokemon::CATERPIE => null,
        Pokemon::METAPOD => Pokemon::CATERPIE,
        Pokemon::BUTTERFREE => Pokemon::METAPOD,
        Pokemon::WEEDLE => null,
        Pokemon::KAKUNA => Pokemon::WEEDLE,
        Pokemon::BEEDRILL => Pokemon::KAKUNA,
        Pokemon::PIDGEY => null,
        Pokemon::PIDGEOTTO => Pokemon::PIDGEY,
        Pokemon::PIDGEOT => Pokemon::PIDGEOTTO,
        Pokemon::RATATTA => null,
        Pokemon::RATICATE => Pokemon::RATATTA,
        Pokemon::SPEAROW => null,
        Pokemon::FEAROW => Pokemon::SPEAROW,
        Pokemon::EKANS => null,
        Pokemon::ARBOK => Pokemon::EKANS,
        Pokemon::PIKACHU => null,
        Pokemon::RAICHU => Pokemon::PIKACHU,
        Pokemon::SANDSHREW => null,
        Pokemon::SANDSLASH => Pokemon::SANDSHREW,
        Pokemon::NIDORAN_F => null,
        Pokemon::NIDORINA => Pokemon::NIDORAN_F,
        Pokemon::NIDOQUEEN => Pokemon::NIDORINA,

        Pokemon::EEVEE => null,
        Pokemon::VAPOREON => Pokemon::EEVEE,
        Pokemon::JOLTEON => Pokemon::EEVEE,
        Pokemon::FLAREON => Pokemon::EEVEE,
        Pokemon::ESPEON => Pokemon::EEVEE,
        Pokemon::UMBREON => Pokemon::EEVEE,
        Pokemon::LEAFEON => Pokemon::EEVEE,
        Pokemon::GLACEON => Pokemon::EEVEE,
        Pokemon::AZURILL => null,
        Pokemon::MARILL => Pokemon::AZURILL,
        Pokemon::AZUMARILL => Pokemon::MARILL,
        Pokemon::NOSEPASS => null,
        Pokemon::PROBOPASS => Pokemon::NOSEPASS,
        Pokemon::SHIELDON => null,
        Pokemon::BASTIODON => Pokemon::SHIELDON,
        Pokemon::SKARMORY => null,
        Pokemon::SWABLU => null,
        Pokemon::ALTARIA => Pokemon::SWABLU,
        Pokemon::TROPIUS => null,
        Pokemon::REGISTEEL => null,
        Pokemon::GENESECT => null,
        Pokemon::SCYTHER => null,
        Pokemon::SCIZOR => Pokemon::SCYTHER,
        Pokemon::PINSIR => null,
        Pokemon::YANMA => null,
        Pokemon::YANMEGA => Pokemon::YANMA,
        Pokemon::HERACROSS => null,
        Pokemon::DURANT => null,
        Pokemon::KARRABLAST => null,
        Pokemon::ESCAVALIER => Pokemon::KARRABLAST,
        Pokemon::SHELMET => null,
        Pokemon::ACCELGOR => Pokemon::SHELMET,
        Pokemon::DEINO => null,
        Pokemon::ZWELIOUS => Pokemon::DEINO,
        Pokemon::HYDREIGON => Pokemon::ZWELIOUS,
        Pokemon::SNEASEL => null,
        Pokemon::WEAVILE => Pokemon::SNEASEL,
        Pokemon::LARVITAR => null,
        Pokemon::PUPITAR => Pokemon::LARVITAR,
        Pokemon::TYRANITAR => Pokemon::PUPITAR,
        Pokemon::HOUNDOUR => null,
        Pokemon::HOUNDOOM => Pokemon::HOUNDOUR,
        Pokemon::MURKROW => null,
        Pokemon::HONCHKROW => Pokemon::MURKROW,
        Pokemon::ABSOL => null,
        Pokemon::GRIMER => null,
        Pokemon::MUK => Pokemon::GRIMER,
        Pokemon::SEEDOT => null,
        Pokemon::NUZLEAF => Pokemon::SEEDOT,
        Pokemon::SHIFTRY => Pokemon::NUZLEAF,
        Pokemon::RESHIRAM => null,
        Pokemon::RAYQUAZA => null,
        Pokemon::DIALGA => null,
        Pokemon::ZEKROM => null,
        Pokemon::PALKIA => null,
        Pokemon::GIBLE => null,
        Pokemon::GABITE => Pokemon::GIBLE,
        Pokemon::GARCHOMP => Pokemon::GABITE,
        Pokemon::BAGON => null,
        Pokemon::SHELGON => Pokemon::BAGON,
        Pokemon::SALAMENCE => Pokemon::SHELGON,
        Pokemon::DRATINI => null,
        Pokemon::DRAGONAIR => Pokemon::DRATINI,
        Pokemon::DRAGONITE => Pokemon::DRAGONAIR,
        Pokemon::AXEW => null,
        Pokemon::FRAXURE => Pokemon::AXEW,
        Pokemon::HAXORUS => Pokemon::FRAXURE,
        Pokemon::LATIOS => null,
        Pokemon::RAIKOU => null,
        Pokemon::ELEKID => null,
        Pokemon::ELECTABUZZ => Pokemon::ELEKID,
        Pokemon::ELECTIVIRE => Pokemon::ELECTABUZZ,
        Pokemon::MAGNEMITE => null,
        Pokemon::MAGNETON => Pokemon::MAGNEMITE,
        Pokemon::MAGNEZONE => Pokemon::MAGNETON,
        Pokemon::ZAPDOS => null,
        Pokemon::SHINX => null,
        Pokemon::LUXIO => Pokemon::SHINX,
        Pokemon::LUXRAY => Pokemon::LUXIO,
        Pokemon::MEWTWO => null,
        Pokemon::DEOXYS => null,
        Pokemon::THUNDURUS => null,
        Pokemon::RALTS => null,
        Pokemon::KIRLIA => Pokemon::RALTS,
        Pokemon::GARDEVOIR => Pokemon::KIRLIA,
        Pokemon::GALLADE => Pokemon::KIRLIA,
        Pokemon::TOGEPI => null,
        Pokemon::TOGETIC => Pokemon::TOGEPI,
        Pokemon::TOGEKISS => Pokemon::TOGETIC,
        Pokemon::SNUBBULL => null,
        Pokemon::GRANBULL => Pokemon::SNUBBULL,
        Pokemon::CUBCHOO => null,
        Pokemon::BEARTIC => Pokemon::CUBCHOO,
        Pokemon::CLEFFA => null,
        Pokemon::CLEFAIRY => Pokemon::CLEFFA,
        Pokemon::CLEFABLE => Pokemon::CLEFAIRY,
        Pokemon::ABRA => null,
        Pokemon::KADABRA => Pokemon::ABRA,
        Pokemon::ALAKAZAM => Pokemon::KADABRA,
        Pokemon::PHANPY => null,
        Pokemon::DONPHAN => Pokemon::PHANPY,
        Pokemon::TEDDIURSA => null,
        Pokemon::URSARING => Pokemon::TEDDIURSA,
        Pokemon::BUDEW => null,
        Pokemon::ROSELIA => Pokemon::BUDEW,
        Pokemon::ROSERADE => Pokemon::ROSELIA,
        Pokemon::VULPIX => null,
        Pokemon::NINETALES => Pokemon::VULPIX,
        Pokemon::RIOLU => null,
        Pokemon::LUCARIO => Pokemon::RIOLU,
        Pokemon::TIMBURR => null,
        Pokemon::GURDURR => Pokemon::TIMBURR,
        Pokemon::CONKELDURR => Pokemon::GURDURR,
        Pokemon::MACHOP => null,
        Pokemon::MACHOKE => Pokemon::MACHOP,
        Pokemon::MACHAMP => Pokemon::MACHOKE,
        Pokemon::SHROOMISH => null,
        Pokemon::BRELOOM => Pokemon::SHROOMISH,
        Pokemon::MAKUHITA => null,
        Pokemon::HARIYAMA => Pokemon::MAKUHITA,
        Pokemon::TORCHIC => null,
        Pokemon::COMBUSKEN => Pokemon::TORCHIC,
        Pokemon::BLAZIKEN => Pokemon::COMBUSKEN,
        Pokemon::FARFETCHD => null,
        Pokemon::SIRFETCH_D => Pokemon::FARFETCHD,
        Pokemon::CROAGUNK => null,
        Pokemon::TOXICROAK => Pokemon::CROAGUNK,
        Pokemon::LITWICK => null,
        Pokemon::LAMPENT => Pokemon::LITWICK,
        Pokemon::CHANDELURE => Pokemon::LAMPENT,
        Pokemon::DARUMAKA => null,
        Pokemon::DARMANITAN => Pokemon::DARUMAKA,
        Pokemon::MOLTRES => null,
        Pokemon::ENTEI => null,
        Pokemon::HEATRAN => null,
        Pokemon::CHIMCHAR => null,
        Pokemon::MONFERNO => Pokemon::CHIMCHAR,
        Pokemon::INFERNAPE => Pokemon::MONFERNO,
        Pokemon::TORNADUS => null,
        Pokemon::PIDOVE => null,
        Pokemon::TRANQUILL => Pokemon::PIDOVE,
        Pokemon::UNFEZANT => Pokemon::TRANQUILL,
        Pokemon::LUGIA => null,
        Pokemon::HOOH => null,
        Pokemon::GIRATINA => null,
        Pokemon::GASTLY => null,
        Pokemon::HAUNTER => Pokemon::GASTLY,
        Pokemon::GENGAR => Pokemon::HAUNTER,
        Pokemon::SHUPPET => null,
        Pokemon::BANETTE => Pokemon::SHUPPET,
        Pokemon::MISDREAVUS => null,
        Pokemon::MISMAGIUS => Pokemon::MISDREAVUS,
        Pokemon::DRIFLOON => null,
        Pokemon::DRIFBLIM => Pokemon::DRIFLOON,
        Pokemon::TREECKO => null,
        Pokemon::GROVYLE => Pokemon::TREECKO,
        Pokemon::SCEPTILE => Pokemon::GROVYLE,
        Pokemon::TANGELA => null,
        Pokemon::TANGROWTH => Pokemon::TANGELA,
        Pokemon::TURTWIG => null,
        Pokemon::GROTLE => Pokemon::TURTWIG,
        Pokemon::TORTERRA => Pokemon::GROTLE,
        Pokemon::EXEGGCUTE => null,
        Pokemon::EXEGGUTOR => Pokemon::EXEGGCUTE,
        Pokemon::PANSAGE => null,
        Pokemon::SIMISAGE => Pokemon::PANSAGE,
        Pokemon::GROUDON => null,
        Pokemon::DRILBUR => null,
        Pokemon::EXCADRILL => Pokemon::DRILBUR,
        Pokemon::RHYHORN => null,
        Pokemon::RHYDON => Pokemon::RHYHORN,
        Pokemon::RHYPERIOR => Pokemon::RHYDON,
        Pokemon::LANDORUS => null,
        Pokemon::GOLETT => null,
        Pokemon::GOLURK => Pokemon::GOLETT,
        Pokemon::SWINUB => null,
        Pokemon::PILOSWINE => Pokemon::SWINUB,
        Pokemon::MAMOSWINE => Pokemon::PILOSWINE,
        Pokemon::GEODUDE => null,
        Pokemon::GRAVELER => Pokemon::GEODUDE,
        Pokemon::GOLEM => Pokemon::GRAVELER,
        Pokemon::SMOOCHUM => null,
        Pokemon::JYNX => Pokemon::SMOOCHUM,
        Pokemon::KYOGRE => null,
        Pokemon::VANILLITE => null,
        Pokemon::VANILLISH => Pokemon::VANILLITE,
        Pokemon::VANILLUXE => Pokemon::VANILLISH,
        Pokemon::KYUREM => null,
        Pokemon::BELLSPROUT => null,
        Pokemon::WEEPINBELL => Pokemon::BELLSPROUT,
        Pokemon::VICTREEBEL => Pokemon::WEEPINBELL,
        Pokemon::VENIPEDE => null,
        Pokemon::WHIRLIPEDE => Pokemon::VENIPEDE,
        Pokemon::SCOLIPEDE => Pokemon::WHIRLIPEDE,
        Pokemon::ODDISH => null,
        Pokemon::GLOOM => Pokemon::ODDISH,
        Pokemon::VILEPLUME => Pokemon::GLOOM,
        Pokemon::BELLOSSOM => Pokemon::GLOOM,
        Pokemon::STUNKY => null,
        Pokemon::SKUNTANK => Pokemon::STUNKY,
        Pokemon::BELDUM => null,
        Pokemon::METANG => Pokemon::BELDUM,
        Pokemon::METAGROSS => Pokemon::METANG,
        Pokemon::AZELF => null,
        Pokemon::LATIAS => null,
        Pokemon::CRANIDOS => null,
        Pokemon::RAMPARDOS => Pokemon::CRANIDOS,
        Pokemon::TERRAKION => null,
        Pokemon::ROGGENROLA => null,
        Pokemon::BOLDORE => Pokemon::ROGGENROLA,
        Pokemon::GIGALITH => Pokemon::BOLDORE,
        Pokemon::AERODACTYL => null,
        Pokemon::OMANYTE => null,
        Pokemon::OMASTAR => Pokemon::OMANYTE,
        Pokemon::JIRACHI => null,
        Pokemon::ARON => null,
        Pokemon::LAIRON => Pokemon::ARON,
        Pokemon::AGGRON => Pokemon::LAIRON,
        Pokemon::PILUP => null,
        Pokemon::PRINPLUP => Pokemon::PILUP,
        Pokemon::EMPOLEON => Pokemon::PRINPLUP,
        Pokemon::KRABBY => null,
        Pokemon::KINGLER => Pokemon::KRABBY,
        Pokemon::MUDKIP => null,
        Pokemon::MARSHTOMP => Pokemon::MUDKIP,
        Pokemon::SWAMPERT => Pokemon::MARSHTOMP,
        Pokemon::TOTODILE => null,
        Pokemon::CROCONAW => Pokemon::TOTODILE,
        Pokemon::FERALIGATR => Pokemon::CROCONAW,
        Pokemon::MAGIKARP => null,
        Pokemon::GYARADOS => Pokemon::MAGIKARP,
        Pokemon::CORPHISH => null,
        Pokemon::CRAWDAUNT => Pokemon::CORPHISH,
        Pokemon::OSHAWOTT => null,
        Pokemon::DEWOTT => Pokemon::OSHAWOTT,
        Pokemon::SAMUROTT => Pokemon::DEWOTT,
        Pokemon::GROWLITHE => null,
        Pokemon::ARCANINE => Pokemon::GROWLITHE,
        Pokemon::MAGBY => null,
        Pokemon::MAGMAR => Pokemon::MAGBY,
        Pokemon::MAGMORTAR => Pokemon::MAGMAR,
        Pokemon::PORYGON => null,
        Pokemon::PORYGON2 => Pokemon::PORYGON,
        Pokemon::PORYGON_Z => Pokemon::PORYGON2,
        Pokemon::CACNEA => null,
        Pokemon::CACTURNE => Pokemon::CACNEA,
        Pokemon::CARAVANHA => null,
        Pokemon::SHARPEDO => Pokemon::CARAVANHA,
        Pokemon::TRAPINCH => null,
        Pokemon::VIBRAVA => Pokemon::TRAPINCH,
        Pokemon::FLYGON => Pokemon::VIBRAVA,
        Pokemon::SABLEYE => null,
        Pokemon::MEDITITE => null,
        Pokemon::MEDICHAM => Pokemon::MEDITITE,
        Pokemon::STUNFISK => null,
        Pokemon::DROWZEE => null,
        Pokemon::HYPNO => Pokemon::DROWZEE,
        Pokemon::CHIKORITA => null,
        Pokemon::BAYLEEF => Pokemon::CHIKORITA,
        Pokemon::MEGANIUM => Pokemon::BAYLEEF,
        Pokemon::MELTAN => null,
        Pokemon::MELMETAL => Pokemon::MELTAN,
        Pokemon::CUBONE => null,
        Pokemon::MAROWAK => Pokemon::CUBONE,
        Pokemon::CRESSELIA => null,
        Pokemon::WOOPER => null,
        Pokemon::QUAGSIRE => Pokemon::WOOPER,
        Pokemon::HOPPIP => null,
        Pokemon::SKIPLOOM => Pokemon::HOPPIP,
        Pokemon::JUMPLUFF => Pokemon::SKIPLOOM,
        Pokemon::MEW => null,
        Pokemon::BARBOACH => null,
        Pokemon::WHISCASH => Pokemon::BARBOACH,
        Pokemon::SEEL => null,
        Pokemon::DEWGONG => Pokemon::SEEL,
        Pokemon::SLAKOTH => null,
        Pokemon::VIGOROTH => Pokemon::SLAKOTH,
        Pokemon::SLAKING => Pokemon::VIGOROTH,
        Pokemon::CHINCHOU => null,
        Pokemon::LANTURN => Pokemon::CHINCHOU,
        Pokemon::LAPRAS => null,
        Pokemon::MUNCHLAX => null,
        Pokemon::SNORLAX => Pokemon::MUNCHLAX,
        Pokemon::LICKITUNG => null,
        Pokemon::LICKILICKY => Pokemon::LICKITUNG,
        Pokemon::SCRAGGY => null,
        Pokemon::SCRAFTY => Pokemon::SCRAGGY,
        Pokemon::UXIE => null,
        Pokemon::ZANGOOSE => null,
        Pokemon::ONIX => null,
        Pokemon::STEELIX => Pokemon::ONIX,
        Pokemon::CYNDAQUIL => null,
        Pokemon::QUILAVA => Pokemon::CYNDAQUIL,
        Pokemon::TYPHLOSION => Pokemon::QUILAVA,
        Pokemon::ARTICUNO => null,
        Pokemon::POLIWAG => null,
        Pokemon::POLIWHIRL => Pokemon::POLIWAG,
        Pokemon::POLIWRATH => Pokemon::POLIWHIRL,
        Pokemon::POLITOED => Pokemon::POLIWHIRL,
        Pokemon::REGICE => null,
        Pokemon::SUICUNE => null,
        Pokemon::DARKRAI => null,
        Pokemon::REGIROCK => null,
        Pokemon::REGIGIGAS => null,
        Pokemon::BRONZOR => null,
        Pokemon::BRONZONG => Pokemon::BRONZOR,
        Pokemon::MAWILE => null,
        Pokemon::BURMY => null,
        Pokemon::WORMADAM => Pokemon::BURMY,
        Pokemon::MOTHIM => Pokemon::BURMY,
        Pokemon::JOLTIK => null,
        Pokemon::GALVANTULA => Pokemon::JOLTIK,
        Pokemon::FERROSEED => null,
        Pokemon::FERROTHORN => Pokemon::FERROSEED,
        Pokemon::MANTYKE => null,
        Pokemon::MANTINE => Pokemon::MANTYKE,
        Pokemon::IGGLYBUFF => null,
        Pokemon::JIGGLYPUFF => Pokemon::IGGLYBUFF,
        Pokemon::WIGGLYTUFF => Pokemon::JIGGLYPUFF,
        Pokemon::HOOTHOOT => null,
        Pokemon::NOCTOWL => Pokemon::HOOTHOOT,
        Pokemon::ZIGZAGOON => null,
        Pokemon::LINOONE => Pokemon::ZIGZAGOON,
        Pokemon::OBSTAGOON => Pokemon::LINOONE,
        Pokemon::TYMPOLE => null,
        Pokemon::PALPITOAD => Pokemon::TYMPOLE,
        Pokemon::SEISMITOAD => Pokemon::PALPITOAD,
        Pokemon::SKORUPI => null,
        Pokemon::DRAPION => Pokemon::SKORUPI,
        Pokemon::SHELLDER => null,
        Pokemon::CLOYSTER => Pokemon::SHELLDER,
        Pokemon::MANKEY => null,
        Pokemon::PRIMEAPE => Pokemon::MANKEY,
        Pokemon::HORSEA => null,
        Pokemon::SEADRA => Pokemon::HORSEA,
        Pokemon::KINGDRA => Pokemon::SEADRA,
    ];
}