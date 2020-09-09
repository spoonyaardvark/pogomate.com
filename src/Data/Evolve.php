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
        Pokemon::RATATTA | Mods::ALOLAN => null,
        Pokemon::RATICATE => Pokemon::RATATTA,
        Pokemon::RATICATE | Mods::ALOLAN => Pokemon::RATATTA | Mods::ALOLAN,
        Pokemon::SPEAROW => null,
        Pokemon::FEAROW => Pokemon::SPEAROW,
        Pokemon::EKANS => null,
        Pokemon::ARBOK => Pokemon::EKANS,
        Pokemon::PIKACHU => Pokemon::PICHU,
        Pokemon::RAICHU => Pokemon::PIKACHU,
        Pokemon::RAICHU | Mods::ALOLAN => null,
        Pokemon::SANDSHREW => null,
        Pokemon::SANDSHREW | Mods::ALOLAN => null,
        Pokemon::SANDSLASH => Pokemon::SANDSHREW,
        Pokemon::SANDSLASH | Mods::ALOLAN => Pokemon::SANDSHREW | Mods::ALOLAN,
        Pokemon::NIDORAN_F => null,
        Pokemon::NIDORINA => Pokemon::NIDORAN_F,
        Pokemon::NIDOQUEEN => Pokemon::NIDORINA,
        Pokemon::NIDORAN_M => null,
        Pokemon::NIDORINO => Pokemon::NIDORAN_M,
        Pokemon::NIDOKING => Pokemon::NIDORINO,
        Pokemon::CLEFAIRY => Pokemon::CLEFFA,
        Pokemon::CLEFABLE => Pokemon::CLEFAIRY,
        Pokemon::VULPIX => null,
        Pokemon::VULPIX | Mods::ALOLAN => null,
        Pokemon::NINETALES => Pokemon::VULPIX,
        Pokemon::NINETALES | Mods::ALOLAN => Pokemon::VULPIX | Mods::ALOLAN,
        Pokemon::JIGGLYPUFF => Pokemon::IGGLYBUFF,
        Pokemon::WIGGLYTUFF => Pokemon::JIGGLYPUFF,
        Pokemon::ZUBAT => null,
        Pokemon::GOLBAT => Pokemon::ZUBAT,
        Pokemon::ODDISH => null,
        Pokemon::GLOOM => Pokemon::ODDISH,
        Pokemon::VILEPLUME => Pokemon::GLOOM,
        Pokemon::PARAS => null,
        Pokemon::PARASECT => Pokemon::PARAS,
        Pokemon::VENONAT => null,
        Pokemon::VENOMOTH => Pokemon::VENONAT,
        Pokemon::DIGLETT => null,
        Pokemon::DIGLETT | Mods::ALOLAN => null,
        Pokemon::DUGTRIO => Pokemon::DIGLETT,
        Pokemon::DUGTRIO | Mods::ALOLAN => Pokemon::DIGLETT | Mods::ALOLAN,
        Pokemon::MEOWTH => null,
        Pokemon::MEOWTH | Mods::ALOLAN => null,
        Pokemon::MEOWTH | Mods::GALARIAN => null,
        Pokemon::PERSIAN => Pokemon::MEOWTH,
        Pokemon::PERSIAN | Mods::ALOLAN => Pokemon::MEOWTH | Mods::ALOLAN,
        Pokemon::PSYDUCK => null,
        Pokemon::GOLDUCK => Pokemon::PSYDUCK,
        Pokemon::MANKEY => null,
        Pokemon::PRIMEAPE => Pokemon::MANKEY,
        Pokemon::GROWLITHE => null,
        Pokemon::ARCANINE => Pokemon::GROWLITHE,
        Pokemon::POLIWAG => null,
        Pokemon::POLIWHIRL => Pokemon::POLIWAG,
        Pokemon::POLIWRATH => Pokemon::POLIWHIRL,
        Pokemon::ABRA => null,
        Pokemon::KADABRA => Pokemon::ABRA,
        Pokemon::ALAKAZAM => Pokemon::KADABRA,
        Pokemon::MACHOP => null,
        Pokemon::MACHOKE => Pokemon::MACHOP,
        Pokemon::MACHAMP => Pokemon::MACHOKE,
        Pokemon::BELLSPROUT => null,
        Pokemon::WEEPINBELL => Pokemon::BELLSPROUT,
        Pokemon::VICTREEBEL => Pokemon::WEEPINBELL,
        Pokemon::TENTACOOL => null,
        Pokemon::TENTACRUEL => Pokemon::TENTACOOL,
        Pokemon::GEODUDE => null,
        Pokemon::GEODUDE | Mods::ALOLAN => null,
        Pokemon::GRAVELER => Pokemon::GEODUDE,
        Pokemon::GRAVELER | Mods::ALOLAN => Pokemon::GEODUDE | Mods::ALOLAN,
        Pokemon::GOLEM => Pokemon::GRAVELER,
        Pokemon::GOLEM | Mods::ALOLAN => Pokemon::GRAVELER | Mods::ALOLAN,
        Pokemon::PONYTA => null,
        Pokemon::PONYTA | Mods::GALARIAN => null,
        Pokemon::RAPIDASH => Pokemon::PONYTA,
        Pokemon::RAPIDASH | Mods::GALARIAN => Pokemon::PONYTA | Mods::GALARIAN,
        Pokemon::SLOWPOKE => null,
        Pokemon::SLOWPOKE | Mods::GALARIAN => null,
        Pokemon::SLOWBRO => Pokemon::SLOWPOKE,
        Pokemon::SLOWBRO | Mods::GALARIAN => Pokemon::SLOWPOKE | Mods::GALARIAN,
        Pokemon::MAGNEMITE => null,
        Pokemon::MAGNETON => Pokemon::MAGNEMITE,
        Pokemon::FARFETCH_D => null,
        Pokemon::FARFETCH_D | Mods::GALARIAN => null,
        Pokemon::DODUO => null,
        Pokemon::DODRIO => Pokemon::DODUO,
        Pokemon::SEEL => null,
        Pokemon::DEWGONG => Pokemon::SEEL,
        Pokemon::GRIMER => null,
        Pokemon::GRIMER | Mods::ALOLAN => null,
        Pokemon::MUK => Pokemon::GRIMER,
        Pokemon::MUK | Mods::ALOLAN => Pokemon::GRIMER | Mods::ALOLAN,
        Pokemon::SHELLDER => null,
        Pokemon::CLOYSTER => Pokemon::SHELLDER,
        Pokemon::GASTLY => null,
        Pokemon::HAUNTER => Pokemon::GASTLY,
        Pokemon::GENGAR => Pokemon::HAUNTER,
        Pokemon::ONIX => null,
        Pokemon::DROWZEE => null,
        Pokemon::HYPNO => Pokemon::DROWZEE,
        Pokemon::KRABBY => null,
        Pokemon::KINGLER => Pokemon::KRABBY,
        Pokemon::VOLTORB => null,
        Pokemon::ELECTRODE => Pokemon::VOLTORB,
        Pokemon::EXEGGCUTE => null,
        Pokemon::EXEGGUTOR => Pokemon::EXEGGCUTE,
        Pokemon::EXEGGUTOR | Mods::ALOLAN => null,
        Pokemon::CUBONE => null,
        Pokemon::MAROWAK => Pokemon::CUBONE,
        Pokemon::MAROWAK | Mods::ALOLAN => null,
        Pokemon::HITMONLEE => Pokemon::TYROGUE,
        Pokemon::HITMONCHAN => Pokemon::TYROGUE,
        Pokemon::LICKITUNG => null,
        Pokemon::KOFFING => null,
        Pokemon::WEEZING => Pokemon::KOFFING,
        Pokemon::WEEZING | Mods::GALARIAN => null,
        Pokemon::RHYHORN => null,
        Pokemon::RHYDON => Pokemon::RHYHORN,
        Pokemon::CHANSEY => Pokemon::HAPPINY,
        Pokemon::TANGELA => null,
        Pokemon::KANGASKHAN => null,
        Pokemon::HORSEA => null,
        Pokemon::SEADRA => Pokemon::HORSEA,
        Pokemon::GOLDEEN => null,
        Pokemon::SEAKING => Pokemon::GOLDEEN,
        Pokemon::STARYU => null,
        Pokemon::STARMIE => Pokemon::STARYU,
        Pokemon::MR_MIME => Pokemon::MIME_JR,
        Pokemon::MR_MIME | Mods::GALARIAN => null,
        Pokemon::SCYTHER => null,
        Pokemon::JYNX => Pokemon::SMOOCHUM,
        Pokemon::ELECTABUZZ => Pokemon::ELEKID,
        Pokemon::MAGMAR => Pokemon::MAGBY,
        Pokemon::PINSIR => null,
        Pokemon::TAUROS => null,
        Pokemon::MAGIKARP => null,
        Pokemon::GYARADOS => Pokemon::MAGIKARP,
        Pokemon::LAPRAS => null,
        Pokemon::DITTO => null,
        Pokemon::EEVEE => null,
        Pokemon::VAPOREON => Pokemon::EEVEE,
        Pokemon::JOLTEON => Pokemon::EEVEE,
        Pokemon::FLAREON => Pokemon::EEVEE,
        Pokemon::PORYGON => null,
        Pokemon::OMANYTE => null,
        Pokemon::OMASTAR => Pokemon::OMANYTE,
        Pokemon::KABUTO => null,
        Pokemon::KABUTOPS => Pokemon::KABUTO,
        Pokemon::AERODACTYL => null,
        Pokemon::SNORLAX => Pokemon::MUNCHLAX,
        Pokemon::ARTICUNO => null,
        Pokemon::ZAPDOS => null,
        Pokemon::MOLTRES => null,
        Pokemon::DRATINI => null,
        Pokemon::DRAGONAIR => Pokemon::DRATINI,
        Pokemon::DRAGONITE => Pokemon::DRAGONAIR,
        Pokemon::MEWTWO => null,
        Pokemon::MEWTWO | Mods::FORM2 => null,
        Pokemon::MEW => null,
        Pokemon::CHIKORITA => null,
        Pokemon::BAYLEEF => Pokemon::CHIKORITA,
        Pokemon::MEGANIUM => Pokemon::BAYLEEF,
        Pokemon::CYNDAQUIL => null,
        Pokemon::QUILAVA => Pokemon::CYNDAQUIL,
        Pokemon::TYPHLOSION => Pokemon::QUILAVA,
        Pokemon::TOTODILE => null,
        Pokemon::CROCONAW => Pokemon::TOTODILE,
        Pokemon::FERALIGATR => Pokemon::CROCONAW,
        Pokemon::SENTRET => null,
        Pokemon::FURRET => Pokemon::SENTRET,
        Pokemon::HOOTHOOT => null,
        Pokemon::NOCTOWL => Pokemon::HOOTHOOT,
        Pokemon::LEDYBA => null,
        Pokemon::LEDIAN => Pokemon::LEDYBA,
        Pokemon::SPINARAK => null,
        Pokemon::ARIADOS => Pokemon::SPINARAK,
        Pokemon::CROBAT => Pokemon::GOLBAT,
        Pokemon::CHINCHOU => null,
        Pokemon::LANTURN => Pokemon::CHINCHOU,
        Pokemon::PICHU => null,
        Pokemon::CLEFFA => null,
        Pokemon::IGGLYBUFF => null,
        Pokemon::TOGEPI => null,
        Pokemon::TOGETIC => Pokemon::TOGEPI,
        Pokemon::NATU => null,
        Pokemon::XATU => Pokemon::NATU,
        Pokemon::MAREEP => null,
        Pokemon::FLAAFFY => Pokemon::MAREEP,
        Pokemon::AMPHAROS => Pokemon::FLAAFFY,
        Pokemon::BELLOSSOM => Pokemon::GLOOM,
        Pokemon::MARILL => Pokemon::AZURILL,
        Pokemon::AZUMARILL => Pokemon::MARILL,
        Pokemon::SUDOWOODO => Pokemon::BONSLY,
        Pokemon::POLITOED => Pokemon::POLIWHIRL,
        Pokemon::HOPPIP => null,
        Pokemon::SKIPLOOM => Pokemon::HOPPIP,
        Pokemon::JUMPLUFF => Pokemon::SKIPLOOM,
        Pokemon::AIPOM => null,
        Pokemon::SUNKERN => null,
        Pokemon::SUNFLORA => Pokemon::SUNKERN,
        Pokemon::YANMA => null,
        Pokemon::WOOPER => null,
        Pokemon::QUAGSIRE => Pokemon::WOOPER,
        Pokemon::ESPEON => Pokemon::EEVEE,
        Pokemon::UMBREON => Pokemon::EEVEE,
        Pokemon::MURKROW => null,
        Pokemon::SLOWKING => Pokemon::SLOWPOKE,
        Pokemon::MISDREAVUS => null,
        Pokemon::UNOWN => null,
        Pokemon::WOBBUFFET => Pokemon::WYNAUT,
        Pokemon::GIRAFARIG => null,
        Pokemon::PINECO => null,
        Pokemon::FORRETRESS => Pokemon::PINECO,
        Pokemon::DUNSPARCE => null,
        Pokemon::GLIGAR => null,
        Pokemon::STEELIX => Pokemon::ONIX,
        Pokemon::SNUBBULL => null,
        Pokemon::GRANBULL => Pokemon::SNUBBULL,
        Pokemon::QWILFISH => null,
        Pokemon::SCIZOR => Pokemon::SCYTHER,
        Pokemon::SHUCKLE => null,
        Pokemon::HERACROSS => null,
        Pokemon::SNEASEL => null,
        Pokemon::TEDDIURSA => null,
        Pokemon::URSARING => Pokemon::TEDDIURSA,
        Pokemon::SLUGMA => null,
        Pokemon::MAGCARGO => Pokemon::SLUGMA,
        Pokemon::SWINUB => null,
        Pokemon::PILOSWINE => Pokemon::SWINUB,
        Pokemon::CORSOLA => null,
        Pokemon::CORSOLA | Mods::GALARIAN => null,
        Pokemon::REMORAID => null,
        Pokemon::OCTILLERY => Pokemon::REMORAID,
        Pokemon::DELIBIRD => null,
        Pokemon::MANTINE => Pokemon::MANTYKE,
        Pokemon::SKARMORY => null,
        Pokemon::HOUNDOUR => null,
        Pokemon::HOUNDOOM => Pokemon::HOUNDOUR,
        Pokemon::KINGDRA => Pokemon::SEADRA,
        Pokemon::PHANPY => null,
        Pokemon::DONPHAN => Pokemon::PHANPY,
        Pokemon::PORYGON2 => Pokemon::PORYGON,
        Pokemon::STANTLER => null,
        Pokemon::SMEARGLE => null,
        Pokemon::TYROGUE => null,
        Pokemon::HITMONTOP => Pokemon::TYROGUE,
        Pokemon::SMOOCHUM => null,
        Pokemon::ELEKID => null,
        Pokemon::MAGBY => null,
        Pokemon::MILTANK => null,
        Pokemon::BLISSEY => Pokemon::CHANSEY,
        Pokemon::RAIKOU => null,
        Pokemon::ENTEI => null,
        Pokemon::SUICUNE => null,
        Pokemon::LARVITAR => null,
        Pokemon::PUPITAR => Pokemon::LARVITAR,
        Pokemon::TYRANITAR => Pokemon::PUPITAR,
        Pokemon::LUGIA => null,
        Pokemon::HO_OH => null,
        Pokemon::CELEBI => null,
        Pokemon::TREECKO => null,
        Pokemon::GROVYLE => Pokemon::TREECKO,
        Pokemon::SCEPTILE => Pokemon::GROVYLE,
        Pokemon::TORCHIC => null,
        Pokemon::COMBUSKEN => Pokemon::TORCHIC,
        Pokemon::BLAZIKEN => Pokemon::COMBUSKEN,
        Pokemon::MUDKIP => null,
        Pokemon::MARSHTOMP => Pokemon::MUDKIP,
        Pokemon::SWAMPERT => Pokemon::MARSHTOMP,
        Pokemon::POOCHYENA => null,
        Pokemon::MIGTYENA => Pokemon::POOCHYENA,
        Pokemon::ZIGZAGOON => null,
        Pokemon::ZIGZAGOON | Mods::GALARIAN => null,
        Pokemon::LINOONE => Pokemon::ZIGZAGOON,
        Pokemon::LINOONE | Mods::GALARIAN => Pokemon::ZIGZAGOON | Mods::GALARIAN,
        Pokemon::WURMPLE => null,
        Pokemon::SILCOON => Pokemon::WURMPLE,
        Pokemon::BEAUTIFLY => Pokemon::SILCOON,
        Pokemon::CASCOON => Pokemon::WURMPLE,
        Pokemon::DUSTOX => Pokemon::CASCOON,
        Pokemon::LOTAD => null,
        Pokemon::LOMBRE => Pokemon::LOTAD,
        Pokemon::LUDICOLO => Pokemon::LOMBRE,
        Pokemon::SEEDOT => null,
        Pokemon::NUZLEAF => Pokemon::SEEDOT,
        Pokemon::SHIFTRY => Pokemon::NUZLEAF,
        Pokemon::TAILLOW => null,
        Pokemon::SWELLOW => Pokemon::TAILLOW,
        Pokemon::WINGULL => null,
        Pokemon::PELIPPER => Pokemon::WINGULL,
        Pokemon::RALTS => null,
        Pokemon::KIRLIA => Pokemon::RALTS,
        Pokemon::GARDEVOIR => Pokemon::KIRLIA,
        Pokemon::SURSKIT => null,
        Pokemon::MASQUERAIN => Pokemon::SURSKIT,
        Pokemon::SHROOMISH => null,
        Pokemon::BRELOOM => Pokemon::SHROOMISH,
        Pokemon::SLAKOTH => null,
        Pokemon::VIGOROTH => Pokemon::SLAKOTH,
        Pokemon::SLAKING => Pokemon::VIGOROTH,
        Pokemon::NINCADA => null,
        Pokemon::NINJASK => Pokemon::NINCADA,
        Pokemon::SHEDINJA => null,
        Pokemon::WHISMUR => null,
        Pokemon::LOUDRED => Pokemon::WHISMUR,
        Pokemon::EXPLOUD => Pokemon::LOUDRED,
        Pokemon::MAKUHITA => null,
        Pokemon::HARIYAMA => Pokemon::MAKUHITA,
        Pokemon::AZURILL => null,
        Pokemon::NOSEPASS => null,
        Pokemon::SKITTY => null,
        Pokemon::DELCATTY => Pokemon::SKITTY,
        Pokemon::SABLEYE => null,
        Pokemon::MAWILE => null,
        Pokemon::ARON => null,
        Pokemon::LAIRON => Pokemon::ARON,
        Pokemon::AGGRON => Pokemon::LAIRON,
        Pokemon::MEDITITE => null,
        Pokemon::MEDICHAM => Pokemon::MEDITITE,
        Pokemon::ELECTRIKE => null,
        Pokemon::MANELECTRIC => Pokemon::ELECTRIKE,
        Pokemon::PLUSLE => null,
        Pokemon::MINUN => null,
        Pokemon::VOLBEAT => null,
        Pokemon::ILLUMISE => null,
        Pokemon::ROSELIA => Pokemon::BUDEW,
        Pokemon::GULPIN => null,
        Pokemon::SWALOT => Pokemon::GULPIN,
        Pokemon::CARAVANHA => null,
        Pokemon::SHARPEDO => Pokemon::CARAVANHA,
        Pokemon::WAILMER => null,
        Pokemon::WAILORD => Pokemon::WAILMER,
        Pokemon::NUMEL => null,
        Pokemon::CAMERUPT => Pokemon::NUMEL,
        Pokemon::TORKOAL => null,
        Pokemon::SPOINK => null,
        Pokemon::GRUMPIG => Pokemon::SPOINK,
        Pokemon::SPINDA => null,
        Pokemon::TRAPINCH => null,
        Pokemon::VIBRAVA => Pokemon::TRAPINCH,
        Pokemon::FLYGON => Pokemon::VIBRAVA,
        Pokemon::CACNEA => null,
        Pokemon::CACTURNE => Pokemon::CACNEA,
        Pokemon::SWABLU => null,
        Pokemon::ALTARIA => Pokemon::SWABLU,
        Pokemon::ZANGOOSE => null,
        Pokemon::SEVIPER => null,
        Pokemon::LUNATONE => null,
        Pokemon::SOLROCK => null,
        Pokemon::BARBOACH => null,
        Pokemon::WHISCASH => Pokemon::BARBOACH,
        Pokemon::CORPHISH => null,
        Pokemon::CRAWDAUNT => Pokemon::CORPHISH,
        Pokemon::BALTOY => null,
        Pokemon::CLAYDOL => Pokemon::BALTOY,
        Pokemon::LILEEP => null,
        Pokemon::CRADILY => Pokemon::LILEEP,
        Pokemon::ANORITH => null,
        Pokemon::ARMALDO => Pokemon::ANORITH,
        Pokemon::FEEBAS => null,
        Pokemon::MILOTIC => Pokemon::FEEBAS,
        Pokemon::CASTFORM => null,
        Pokemon::KECLEON => null,
        Pokemon::SHUPPET => null,
        Pokemon::BANETTE => Pokemon::SHUPPET,
        Pokemon::DUSKULL => null,
        Pokemon::DUSCLOPS => Pokemon::DUSKULL,
        Pokemon::TROPIUS => null,
        Pokemon::CHIMECHO => Pokemon::CHINGLING,
        Pokemon::ABSOL => null,
        Pokemon::WYNAUT => null,
        Pokemon::SNORUNT => null,
        Pokemon::GLALIE => Pokemon::SNORUNT,
        Pokemon::SPHEAL => null,
        Pokemon::SEALEO => Pokemon::SPHEAL,
        Pokemon::WALREIN => Pokemon::SEALEO,
        Pokemon::CLAMPERL => null,
        Pokemon::HUNTAIL => Pokemon::CLAMPERL,
        Pokemon::GOREBYSS => Pokemon::CLAMPERL,
        Pokemon::RELICANTH => null,
        Pokemon::LUVDISC => null,
        Pokemon::BAGON => null,
        Pokemon::SHELGON => Pokemon::BAGON,
        Pokemon::SALAMENCE => Pokemon::SHELGON,
        Pokemon::BELDUM => null,
        Pokemon::METANG => Pokemon::BELDUM,
        Pokemon::METAGROSS => Pokemon::METANG,
        Pokemon::REGIROCK => null,
        Pokemon::REGICE => null,
        Pokemon::REGISTEEL => null,
        Pokemon::LATIAS => null,
        Pokemon::LATIOS => null,
        Pokemon::KYOGRE => null,
        Pokemon::GROUDON => null,
        Pokemon::RAYQUAZA => null,
        Pokemon::JIRACHI => null,
        Pokemon::DEOXYS => null,
        Pokemon::DEOXYS | Mods::FORM2 => null,
        Pokemon::DEOXYS | Mods::FORM3 => null,
        Pokemon::DEOXYS | Mods::FORM4 => null,
        Pokemon::TURTWIG => null,
        Pokemon::GROTLE => Pokemon::TURTWIG,
        Pokemon::TORTERRA => Pokemon::GROTLE,
        Pokemon::CHIMCHAR => null,
        Pokemon::MONFERNO => Pokemon::CHIMCHAR,
        Pokemon::INFERNAPE => Pokemon::MONFERNO,
        Pokemon::PILUP => null,
        Pokemon::PRINPLUP => Pokemon::PILUP,
        Pokemon::EMPOLEON => Pokemon::PRINPLUP,
        Pokemon::STARLY => null,
        Pokemon::STARAVIA => Pokemon::STARLY,
        Pokemon::STARAPTOR => Pokemon::STARAVIA,
        Pokemon::BIDOOF => null,
        Pokemon::BIBAREL => Pokemon::BIDOOF,
        Pokemon::KRICKETOT => null,
        Pokemon::KRICKETUNE => Pokemon::KRICKETOT,
        Pokemon::SHINX => null,
        Pokemon::LUXIO => Pokemon::SHINX,
        Pokemon::LUXRAY => Pokemon::LUXIO,
        Pokemon::BUDEW => null,
        Pokemon::ROSERADE => Pokemon::ROSELIA,
        Pokemon::CRANIDOS => null,
        Pokemon::RAMPARDOS => Pokemon::CRANIDOS,
        Pokemon::SHIELDON => null,
        Pokemon::BASTIODON => Pokemon::SHIELDON,
        Pokemon::BURMY | Mods::FORM1 => null,
        Pokemon::BURMY | Mods::FORM2 => null,
        Pokemon::BURMY | Mods::FORM3 => null,
        Pokemon::WORMADAM | Mods::FORM1 => Pokemon::BURMY | Mods::FORM1,
        Pokemon::WORMADAM | Mods::FORM2 => Pokemon::BURMY | Mods::FORM2,
        Pokemon::WORMADAM | Mods::FORM3 => Pokemon::BURMY | Mods::FORM3,
        Pokemon::MOTHIM => Pokemon::BURMY,
        Pokemon::COMBEE => null,
        Pokemon::VESPIQUEN => Pokemon::COMBEE,
        Pokemon::PACHIRISU => null,
        Pokemon::BUZIEL => null,
        Pokemon::FLOATZEL => Pokemon::BUZIEL,
        Pokemon::CHERUBI => null,
        Pokemon::CHERRIM => Pokemon::CHERUBI,
        Pokemon::SHELLOS => null,
        Pokemon::GASTRODON => Pokemon::SHELLOS,
        Pokemon::AMBIPOM => Pokemon::AIPOM,
        Pokemon::DRIFLOON => null,
        Pokemon::DRIFBLIM => Pokemon::DRIFLOON,
        Pokemon::BUNEARY => null,
        Pokemon::LOPUNNY => Pokemon::BUNEARY,
        Pokemon::MISMAGIUS => Pokemon::MISDREAVUS,
        Pokemon::HONCHKROW => Pokemon::MURKROW,
        Pokemon::GLAMEOW => null,
        Pokemon::PURUGLY => Pokemon::GLAMEOW,
        Pokemon::CHINGLING => null,
        Pokemon::STUNKY => null,
        Pokemon::SKUNTANK => Pokemon::STUNKY,
        Pokemon::BRONZOR => null,
        Pokemon::BRONZONG => Pokemon::BRONZOR,
        Pokemon::BONSLY => null,
        Pokemon::MIME_JR => null,
        Pokemon::HAPPINY => null,
        Pokemon::CHATOT => null,
        Pokemon::SPIRITOMB => null,
        Pokemon::GIBLE => null,
        Pokemon::GABITE => Pokemon::GIBLE,
        Pokemon::GARCHOMP => Pokemon::GABITE,
        Pokemon::MUNCHLAX => null,
        Pokemon::RIOLU => null,
        Pokemon::LUCARIO => Pokemon::RIOLU,
        Pokemon::HIPPOPOTAS => null,
        Pokemon::HIPPOWDON => Pokemon::HIPPOPOTAS,
        Pokemon::SKORUPI => null,
        Pokemon::DRAPION => Pokemon::SKORUPI,
        Pokemon::CROAGUNK => null,
        Pokemon::TOXICROAK => Pokemon::CROAGUNK,
        Pokemon::CARNIVINE => null,
        Pokemon::FINNEON => null,
        Pokemon::LUMINEON => Pokemon::FINNEON,
        Pokemon::MANTYKE => null,
        Pokemon::SNOVER => null,
        Pokemon::ABOMASNOW => Pokemon::SNOVER,
        Pokemon::WEAVILE => Pokemon::SNEASEL,
        Pokemon::MAGNEZONE => Pokemon::MAGNETON,
        Pokemon::LICKILICKY => Pokemon::LICKITUNG,
        Pokemon::RHYPERIOR => Pokemon::RHYDON,
        Pokemon::TANGROWTH => Pokemon::TANGELA,
        Pokemon::ELECTIVIRE => Pokemon::ELECTABUZZ,
        Pokemon::MAGMORTAR => Pokemon::MAGMAR,
        Pokemon::TOGEKISS => Pokemon::TOGETIC,
        Pokemon::YANMEGA => Pokemon::YANMA,
        Pokemon::LEAFEON => Pokemon::EEVEE,
        Pokemon::GLACEON => Pokemon::EEVEE,
        Pokemon::GLISCOR => Pokemon::GLIGAR,
        Pokemon::MAMOSWINE => Pokemon::PILOSWINE,
        Pokemon::PORYGON_Z => Pokemon::PORYGON2,
        Pokemon::GALLADE => Pokemon::KIRLIA,
        Pokemon::PROBOPASS => Pokemon::NOSEPASS,
        Pokemon::DUSKNOIR => Pokemon::DUSCLOPS,
        Pokemon::FROSLASS => Pokemon::SNORUNT,
        Pokemon::ROTOM => null,
        Pokemon::UXIE => null,
        Pokemon::MESPRIT => null,
        Pokemon::AZELF => null,
        Pokemon::DIALGA => null,
        Pokemon::PALKIA => null,
        Pokemon::HEATRAN => null,
        Pokemon::REGIGIGAS => null,
        Pokemon::GIRATINA => null,
        Pokemon::GIRATINA | Mods::FORM2 => null,
        Pokemon::CRESSELIA => null,
        Pokemon::PHIONE => null,
        Pokemon::MANAPHY => null,
        Pokemon::DARKRAI => null,
        Pokemon::SHAYMIN | Mods::FORM1 => null,
        Pokemon::SHAYMIN | Mods::FORM2 => null,
        Pokemon::ARCEUS => null,
        Pokemon::VICTINI => null,
        Pokemon::SNIVY => null,
        Pokemon::SERVINE => Pokemon::SNIVY,
        Pokemon::SERPERIOR => Pokemon::SERVINE,
        Pokemon::TEPIG => null,
        Pokemon::PIGNITE => Pokemon::TEPIG,
        Pokemon::EMBOAR => Pokemon::TEPIG,
        Pokemon::OSHAWOTT => null,
        Pokemon::DEWOTT => Pokemon::OSHAWOTT,
        Pokemon::SAMUROTT => Pokemon::DEWOTT,
        Pokemon::PATRAT => null,
        Pokemon::WATCHDOG => Pokemon::PATRAT,
        Pokemon::LILLIPUP => null,
        Pokemon::HERDIER => Pokemon::LILLIPUP,
        Pokemon::STOUTLAND => Pokemon::HERDIER,
        Pokemon::PURROLIN => null,
        Pokemon::LIEPARD => Pokemon::PURROLIN,
        Pokemon::PANSAGE => null,
        Pokemon::SIMISAGE => Pokemon::PANSAGE,
        Pokemon::PANSEAR => null,
        Pokemon::SMISEAR => Pokemon::PANSEAR,
        Pokemon::PANPOUR => null,
        Pokemon::SMIPOUR => Pokemon::PANPOUR,
        Pokemon::MUNNA => null,
        Pokemon::MUSHARNA => Pokemon::MUNNA,
        Pokemon::PIDOVE => null,
        Pokemon::TRANQUILL => Pokemon::PIDOVE,
        Pokemon::UNFEZANT => Pokemon::TRANQUILL,
        Pokemon::BLITZLE => null,
        Pokemon::ZEBSTRIKA => Pokemon::BLITZLE,
        Pokemon::ROGGENROLA => null,
        Pokemon::BOLDORE => Pokemon::ROGGENROLA,
        Pokemon::GIGALITH => Pokemon::BOLDORE,
        Pokemon::WOOBAT => null,
        Pokemon::SWOOBAT => Pokemon::WOOBAT,
        Pokemon::DRILBUR => null,
        Pokemon::EXCADRILL => Pokemon::DRILBUR,
        Pokemon::AUDINO => null,
        Pokemon::TIMBURR => null,
        Pokemon::GURDURR => Pokemon::TIMBURR,
        Pokemon::CONKELDURR => Pokemon::GURDURR,
        Pokemon::TYMPOLE => null,
        Pokemon::PALPITOAD => Pokemon::TYMPOLE,
        Pokemon::SEISMITOAD => Pokemon::PALPITOAD,
        Pokemon::THROH => null,
        Pokemon::SAWK => null,
        Pokemon::SEWADDLE => null,
        Pokemon::SWADLOON => Pokemon::SEWADDLE,
        Pokemon::LEVANNY => Pokemon::SWADLOON,
        Pokemon::VENIPEDE => null,
        Pokemon::WHIRLIPEDE => Pokemon::VENIPEDE,
        Pokemon::SCOLIPEDE => Pokemon::WHIRLIPEDE,
        Pokemon::COTTONEE => null,
        Pokemon::WHIMSICOTT => Pokemon::COTTONEE,
        Pokemon::PETILIL => null,
        Pokemon::LILLIGANT => Pokemon::PETILIL,
        Pokemon::BASCULIN => null,
        Pokemon::SANDILE => null,
        Pokemon::KROKOROK => Pokemon::SANDILE,
        Pokemon::KROOKODILE => Pokemon::KROKOROK,
        Pokemon::DARUMAKA => null,
        Pokemon::DARUMAKA | Mods::GALARIAN => null,
        Pokemon::DARMANITAN => Pokemon::DARUMAKA,
        Pokemon::DARMANITAN | Mods::GALARIAN => Pokemon::DARUMAKA | Mods::GALARIAN,
        Pokemon::MARACTUS => null,
        Pokemon::DWEBBLE => null,
        Pokemon::CRUSTLE => Pokemon::DWEBBLE,
        Pokemon::SCRAGGY => null,
        Pokemon::SCRAFTY => Pokemon::SCRAGGY,
        Pokemon::SIGILYPH => null,
        Pokemon::YAMASK => null,
        Pokemon::YAMASK | Mods::GALARIAN => null,
        Pokemon::COFAGRIGUS => Pokemon::YAMASK,
        Pokemon::TIRTOUGA => null,
        Pokemon::CARRACOSTA => Pokemon::TIRTOUGA,
        Pokemon::ARCHEN => null,
        Pokemon::ARCHEOPS => Pokemon::ARCHEN,
        Pokemon::TRUBBISH => null,
        Pokemon::GARBODOR => Pokemon::TRUBBISH,
        Pokemon::ZORUA => null,
        Pokemon::ZOROARK => Pokemon::ZORUA,
        Pokemon::MINCCINO => null,
        Pokemon::CINCCINO => Pokemon::MINCCINO,
        Pokemon::GOTHITA => null,
        Pokemon::GOTHORITA => Pokemon::GOTHITA,
        Pokemon::GOTHITELLE => Pokemon::GOTHORITA,
        Pokemon::SOLOSIS => null,
        Pokemon::DUOSION => Pokemon::SOLOSIS,
        Pokemon::REUNICLUS => Pokemon::DUOSION,
        Pokemon::DUCKLETT => null,
        Pokemon::SWANNA => Pokemon::DUCKLETT,
        Pokemon::VANILLITE => null,
        Pokemon::VANILLISH => Pokemon::VANILLITE,
        Pokemon::VANILLUXE => Pokemon::VANILLISH,
        Pokemon::DEERLING => null,
        Pokemon::SAWSBUCK => Pokemon::DEERLING,
        Pokemon::EMOLGA => null,
        Pokemon::KARRABLAST => null,
        Pokemon::ESCAVALIER => Pokemon::KARRABLAST,
        Pokemon::FOONGUS => null,
        Pokemon::AMOONGUSS => Pokemon::FOONGUS,
        Pokemon::FRILLISH => null,
        Pokemon::JELLICENT => Pokemon::FRILLISH,
        Pokemon::ALOMOMOLA => null,
        Pokemon::JOLTIK => null,
        Pokemon::GALVANTULA => Pokemon::JOLTIK,
        Pokemon::FERROSEED => null,
        Pokemon::FERROTHORN => Pokemon::FERROSEED,
        Pokemon::KLINK => null,
        Pokemon::KLANG => Pokemon::KLINK,
        Pokemon::KLINKLANG => Pokemon::KLINKLANG,
        Pokemon::TYNAMO => null,
        Pokemon::ELEKTRIK => Pokemon::TYNAMO,
        Pokemon::ELEKTROSS => Pokemon::ELEKTRIK,
        Pokemon::ELGYEM => null,
        Pokemon::BEHEEYEM => Pokemon::ELGYEM,
        Pokemon::LITWICK => null,
        Pokemon::LAMPENT => Pokemon::LITWICK,
        Pokemon::CHANDELURE => Pokemon::LAMPENT,
        Pokemon::AXEW => null,
        Pokemon::FRAXURE => Pokemon::AXEW,
        Pokemon::HAXORUS => Pokemon::FRAXURE,
        Pokemon::CUBCHOO => null,
        Pokemon::BEARTIC => Pokemon::CUBCHOO,
        Pokemon::CRYOGONAL => null,
        Pokemon::SHELMET => null,
        Pokemon::ACCELGOR => Pokemon::SHELMET,
        Pokemon::STUNFISK => null,
        Pokemon::STUNFISK | Mods::GALARIAN => null,
        Pokemon::MIENFOO => null,
        Pokemon::MIENSHAO => Pokemon::MIENFOO,
        Pokemon::DRUDDIGON => null,
        Pokemon::GOLETT => null,
        Pokemon::GOLURK => Pokemon::GOLETT,
        Pokemon::PAWNIARD => null,
        Pokemon::BISHARP => Pokemon::PAWNIARD,
        Pokemon::BOUFFALANT => null,
        Pokemon::RUFFLET => null,
        Pokemon::BRAVIARY => Pokemon::RUFFLET,
        Pokemon::VULLABY => null,
        Pokemon::MANDIBUZZ => Pokemon::VULLABY,
        Pokemon::HEATMOR => null,
        Pokemon::DURANT => null,
        Pokemon::DEINO => null,
        Pokemon::ZWELIOUS => Pokemon::DEINO,
        Pokemon::HYDREIGON => Pokemon::ZWELIOUS,
        Pokemon::LARVESTA => null,
        Pokemon::VOLCARONA => Pokemon::LARVESTA,
        Pokemon::COBALLION => null,
        Pokemon::TERRAKION => null,
        Pokemon::VIRIZION => null,
        Pokemon::TORNADUS | Mods::FORM1 => null,
        Pokemon::TORNADUS | Mods::FORM2 => null,
        Pokemon::THUNDURUS | Mods::FORM1 => null,
        Pokemon::THUNDURUS | Mods::FORM2 => null,
        Pokemon::RESHIRAM => null,
        Pokemon::ZEKROM => null,
        Pokemon::LANDORUS | Mods::FORM1 => null,
        Pokemon::LANDORUS | Mods::FORM2 => null,
        Pokemon::KYUREM => null,
        Pokemon::KELDEO => null,
        Pokemon::MELOETTA => null,
        Pokemon::GENESECT => null,
        Pokemon::CHESPIN => null,
        Pokemon::QUILLADIN => Pokemon::CHESPIN,
        Pokemon::CHESNAUGHT => Pokemon::QUILLADIN,
        Pokemon::FENNEKIN => null,
        Pokemon::BRAIXEN => Pokemon::FENNEKIN,
        Pokemon::DELPHOX => Pokemon::BRAIXEN,
        Pokemon::FROAKIE => null,
        Pokemon::FROGADIER => Pokemon::FROAKIE,
        Pokemon::GRENINJA => Pokemon::FROGADIER,
        Pokemon::BUNNELBY => null,
        Pokemon::DIGGERSBY => Pokemon::BUNNELBY,
        Pokemon::FLETCHLING => null,
        Pokemon::FLETCHINDER => Pokemon::FLETCHLING,
        Pokemon::TALONFLAME => Pokemon::FLETCHINDER,
        Pokemon::SCATTERBUG => null,
        Pokemon::SPEWPA => Pokemon::SCATTERBUG,
        Pokemon::VIVILLON => Pokemon::SPEWPA,
        Pokemon::LITLEO => null,
        Pokemon::PYROAR => Pokemon::LITLEO,
        Pokemon::FLABEBE => null,
        Pokemon::FLOETTE => Pokemon::FLABEBE,
        Pokemon::FLORGES => Pokemon::FLOETTE,
        Pokemon::SKIDDO => null,
        Pokemon::GOGOAT => Pokemon::SKIDDO,
        Pokemon::PANCHAM => null,
        Pokemon::PANGORO => Pokemon::PANCHAM,
        Pokemon::FURFROU => null,
        Pokemon::ESPURR => null,
        Pokemon::MEOWSTIC => Pokemon::ESPURR,
        Pokemon::HONEDGE => null,
        Pokemon::DOUBLADE => Pokemon::HONEDGE,
        Pokemon::AEGISLASH => Pokemon::DOUBLADE,
        Pokemon::SPIRITZEE => null,
        Pokemon::AROMATISSE => Pokemon::SPIRITZEE,
        Pokemon::SWIRLIX => null,
        Pokemon::SLURPUFF => Pokemon::SWIRLIX,
        Pokemon::INKAY => null,
        Pokemon::MALAMAR => Pokemon::INKAY,
        Pokemon::BINACLE => null,
        Pokemon::BARBARACLE => Pokemon::BINACLE,
        Pokemon::SKRELP => null,
        Pokemon::DRAGALGE => Pokemon::SKRELP,
        Pokemon::CLAUNCHER => null,
        Pokemon::CLAWITZER => Pokemon::CLAUNCHER,
        Pokemon::HELIOPTILE => null,
        Pokemon::HELIOLISK => Pokemon::HELIOPTILE,
        Pokemon::TYRUNT => null,
        Pokemon::TYRANTRUM => Pokemon::TYRUNT,
        Pokemon::AMAURA => null,
        Pokemon::AURORUS => Pokemon::AMAURA,
        Pokemon::SYLVEON => Pokemon::EEVEE,
        Pokemon::HAWLUCHA => null,
        Pokemon::DEDENNE => null,
        Pokemon::CARBINK => null,
        Pokemon::GOOMY => null,
        Pokemon::SLIGGOO => Pokemon::GOOMY,
        Pokemon::GOODRA => Pokemon::SLIGGOO,
        Pokemon::KLEFKI => null,
        Pokemon::PHANTUMP => null,
        Pokemon::TREVEANT => Pokemon::PHANTUMP,
        Pokemon::PUMPKABOO => null,
        Pokemon::GOURGEIST => Pokemon::PUMPKABOO,
        Pokemon::BERGMITE => null,
        Pokemon::AVALUGG => Pokemon::BERGMITE,
        Pokemon::NOIBAT => null,
        Pokemon::NOIVERN => Pokemon::NOIBAT,
        Pokemon::XERNEAS => null,
        Pokemon::YVELTAL => null,
        Pokemon::ZYGARGE | Mods::FORM1 => null,
        Pokemon::ZYGARGE | Mods::FORM2 => null,
        Pokemon::ZYGARGE | Mods::FORM3 => null,
        Pokemon::DIANCIE => null,
        Pokemon::HOOPA => null,
        Pokemon::VOLCANION => null,
        Pokemon::ROWLET => null,
        Pokemon::DARTRIX => Pokemon::ROWLET,
        Pokemon::DECIDUEYE => Pokemon::DARTRIX,
        Pokemon::LITTEN => null,
        Pokemon::TORRACAT => Pokemon::LITTEN,
        Pokemon::INCINEROAR => Pokemon::TORRACAT,
        Pokemon::POPPLIO => null,
        Pokemon::BRIONNE => Pokemon::POPPLIO,
        Pokemon::PRIMARINA => Pokemon::BRIONNE,
        Pokemon::PIKIPEK => null,
        Pokemon::TRUMBEAK => Pokemon::PIKIPEK,
        Pokemon::TOUCANNON => Pokemon::TRUMBEAK,
        Pokemon::YUNGOOS => null,
        Pokemon::GUMSHOOS => Pokemon::YUNGOOS,
        Pokemon::GRUBBIN => null,
        Pokemon::CHARJABUG => Pokemon::GRUBBIN,
        Pokemon::VIKAVOLT => Pokemon::CHARJABUG,
        Pokemon::CRABAWLER => null,
        Pokemon::CRABOMINABLE => Pokemon::CRABAWLER,
        Pokemon::ORICORIO => null,
        Pokemon::CUTIEFLY => null,
        Pokemon::RIBOMBEE => Pokemon::CUTIEFLY,
        Pokemon::ROCKRUFF => null,
        Pokemon::LYCANROC | Mods::FORM1 => Pokemon::ROCKRUFF,
        Pokemon::LYCANROC | Mods::FORM2 => Pokemon::ROCKRUFF,
        Pokemon::LYCANROC | Mods::FORM3 => Pokemon::ROCKRUFF,
        Pokemon::WISHIWASHI => null,
        Pokemon::MAREANIE => null,
        Pokemon::TOXAPEX => Pokemon::MAREANIE,
        Pokemon::MUDBRAY => null,
        Pokemon::MUDSDALE => Pokemon::MUDBRAY,
        Pokemon::DEWPIDER => null,
        Pokemon::ARAQUANID => Pokemon::DEWPIDER,
        Pokemon::FOMANTIS => null,
        Pokemon::LURANTIS => Pokemon::FOMANTIS,
        Pokemon::MORELULL => null,
        Pokemon::SHIINOTIC => Pokemon::MORELULL,
        Pokemon::SALANDIT => null,
        Pokemon::SALAZZLE => Pokemon::SALANDIT,
        Pokemon::STUFFUL => null,
        Pokemon::BEWEAR => Pokemon::STUFFUL,
        Pokemon::BOUNSWEET => null,
        Pokemon::STEENEE => Pokemon::BOUNSWEET,
        Pokemon::TSAREENA => Pokemon::STEENEE,
        Pokemon::COMFEY => null,
        Pokemon::ORANGURU => null,
        Pokemon::PASSIMIAN => null,
        Pokemon::WIMPOD => null,
        Pokemon::GOLISOPOD => Pokemon::WIMPOD,
        Pokemon::SANDYGAST => null,
        Pokemon::PALOSSAND => Pokemon::SANDYGAST,
        Pokemon::PYUKUMUKU => null,
        Pokemon::TYPE_NULL => null,
        Pokemon::SILVALLY => Pokemon::TYPE_NULL,
        Pokemon::MINIOR | Mods::FORM1 => null,
        Pokemon::MINIOR | Mods::FORM2 => null,
        Pokemon::KOMALA => null,
        Pokemon::TURTONATOR => null,
        Pokemon::TOGEDEMARU => null,
        Pokemon::MIMIKYU => null,
        Pokemon::BRUXISH => null,
        Pokemon::DRAMPA => null,
        Pokemon::DHELMISE => null,
        Pokemon::JANGMO_O => null,
        Pokemon::HAKAMO_O => Pokemon::JANGMO_O,
        Pokemon::KOMMO_O => Pokemon::HAKAMO_O,
        Pokemon::TAPU_KOKO => null,
        Pokemon::TAPU_LELE => null,
        Pokemon::TAPU_BULU => null,
        Pokemon::TAPU_FINI => null,
        Pokemon::COSMOG => null,
        Pokemon::COSMOEM => Pokemon::COSMOG,
        Pokemon::SOLGALEO => Pokemon::COSMOEM,
        Pokemon::LUNALA => Pokemon::COSMOEM,
        Pokemon::NIHILEGO => null,
        Pokemon::BUZZWOLE => null,
        Pokemon::PHEROMOSA => null,
        Pokemon::XURKITREE => null,
        Pokemon::CELESTEELA => null,
        Pokemon::KARTANA => null,
        Pokemon::GUZZLORD => null,
        Pokemon::NECROZMA => null,
        Pokemon::MAGEARNA => null,
        Pokemon::MARSHADOW => null,
        Pokemon::POIPOLE => null,
        Pokemon::NAGANADEL => Pokemon::POIPOLE,
        Pokemon::STAKATAKA => null,
        Pokemon::BLACEPHALON => null,
        Pokemon::ZERAORA => null,
        Pokemon::MELTAN => null,
        Pokemon::MELMETAL => Pokemon::MELTAN,
        Pokemon::GROOKEY => null,
        Pokemon::THWACKEY => Pokemon::GROOKEY,
        Pokemon::RILLABOOM => Pokemon::THWACKEY,
        Pokemon::SCORBUNNY => null,
        Pokemon::RABOOT => Pokemon::SCORBUNNY,
        Pokemon::CINDERACE => Pokemon::RABOOT,
        Pokemon::SOBBLE => null,
        Pokemon::DRIZZILE => Pokemon::SOBBLE,
        Pokemon::INTELEON => Pokemon::DRIZZILE,
        Pokemon::SKWOVET => null,
        Pokemon::GREEDENT => Pokemon::SKWOVET,
        Pokemon::ROOKIDEE => null,
        Pokemon::CORVISQUIRE => Pokemon::ROOKIDEE,
        Pokemon::CORVIKNIGHT => Pokemon::CORVISQUIRE,
        Pokemon::BLIPBUG => null,
        Pokemon::DOTTLER => Pokemon::BLIPBUG,
        Pokemon::ORBEETLE => Pokemon::DOTTLER,
        Pokemon::NICKIT => null,
        Pokemon::THIEVUL => Pokemon::NICKIT,
        Pokemon::GOSSIFLEUR => null,
        Pokemon::ELDEGOSS => Pokemon::GOSSIFLEUR,
        Pokemon::WOOLOO => null,
        Pokemon::DUBWOOL => Pokemon::WOOLOO,
        Pokemon::CHEWTLE => null,
        Pokemon::DREDNAW => Pokemon::CHEWTLE,
        Pokemon::YAMPER => null,
        Pokemon::BOLTUND => Pokemon::YAMPER,
        Pokemon::ROLYCOLY => null,
        Pokemon::CARKOL => Pokemon::ROLYCOLY,
        Pokemon::COALOSSAL => Pokemon::CARKOL,
        Pokemon::APPLIN => null,
        Pokemon::FLAPPLE => Pokemon::APPLIN,
        Pokemon::APPLETUN => Pokemon::APPLIN,
        Pokemon::SILICOBRA => null,
        Pokemon::SANDACONDA => Pokemon::SILICOBRA,
        Pokemon::CRAMORANT => null,
        Pokemon::ARROKUDA => null,
        Pokemon::BARRASKEWDA => Pokemon::ARROKUDA,
        Pokemon::TOXEL => null,
        Pokemon::TOXTRICITY => Pokemon::TOXEL,
        Pokemon::SIZZLIPEDE => null,
        Pokemon::CENTISKORCH => Pokemon::SIZZLIPEDE,
        Pokemon::CLOBBOPUS => null,
        Pokemon::GRAPPLOCT => Pokemon::CLOBBOPUS,
        Pokemon::SINISTEA => null,
        Pokemon::POLTEAGEIST => Pokemon::SINISTEA,
        Pokemon::HATENNA => null,
        Pokemon::HATTREM => Pokemon::HATENNA,
        Pokemon::HATTERENE => Pokemon::HATTREM,
        Pokemon::IMPIDIMP => null,
        Pokemon::MORGREM => Pokemon::IMPIDIMP,
        Pokemon::GRIMMSNARL => Pokemon::MORGREM,
        Pokemon::OBSTAGOON => Pokemon::LINOONE | Mods::GALARIAN,
        Pokemon::PERRSERKER => null,
        Pokemon::CURSOLA => null,
        Pokemon::SIRFETCH_D => null,
        Pokemon::MR_RIME => null,
        Pokemon::RINERIGUS => null,
        Pokemon::MILCERY => null,
        Pokemon::ALCREMIE => Pokemon::MILCERY,
        Pokemon::FALINKS => null,
        Pokemon::PINCURCHIN => null,
        Pokemon::SNOM => null,
        Pokemon::FROSMOTH => Pokemon::SNOM,
        Pokemon::STONJOURNER => null,
        Pokemon::EISCUE => null,
        Pokemon::INDEEDEE | Mods::FORM1 => null,
        Pokemon::INDEEDEE | Mods::FORM2 => null,
        Pokemon::MORPEKO => null,
        Pokemon::CUFANT => null,
        Pokemon::COPPERAJAH => Pokemon::CUFANT,
        Pokemon::DRACOZOLT => null,
        Pokemon::ARCTOZOLT => null,
        Pokemon::DRACOVISH => null,
        Pokemon::ARCTOVISH => null,
        Pokemon::DURALUDON => null,
        Pokemon::DREEPY => null,
        Pokemon::DRAKLOAK => Pokemon::DREEPY,
        Pokemon::DRAGAPULT => Pokemon::DRAKLOAK,
        Pokemon::ZACIAN | Mods::FORM1 => null,
        Pokemon::ZACIAN | Mods::FORM2 => null,
        Pokemon::ZAMAZENTA | Mods::FORM1 => null,
        Pokemon::ZAMAZENTA | Mods::FORM2 => null,
        Pokemon::ETERNATUS => null,
        Pokemon::KUBFU => null,
        Pokemon::URSHIFU | Mods::FORM1 => Pokemon::KUBFU,
        Pokemon::URSHIFU | Mods::FORM2 => Pokemon::KUBFU,
    ];

    public static function getEvolveFrom(int $pokedexId)
    {
        return self::EVOLVE_FROM[$pokedexId] ?? null;
    }

    public static function getEvolveTo(int $pokedexId, $baseForms = false)
    {
        $result = [];
        foreach (self::EVOLVE_FROM as $to => $from) {
            if ($from !== $pokedexId) {
                continue;
            }
            if ($baseForms) {
                $result[Mods::getId($to)] = 1;
            } else {
                $result[$to] = 1;
            }
        }
        $result = array_keys($result);
        sort($result);
        return $result;
    }
}
