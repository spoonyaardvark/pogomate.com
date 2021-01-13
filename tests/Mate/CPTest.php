<?php

namespace Mate;

use Pogo\Mate\CP;
use PHPUnit\Framework\TestCase;
use Pogo\Pokemon;
use Pogo\Pokemon\Mods;

// CP::getCP(\Pogo\Pokemon::get(\Pogo\Pokemon::ROSERADE), 14, 15, 12, 36.5);

class CPTest extends TestCase
{
    public function testGetCP1()
    {
        foreach (self::CASES as $case) {
            $this->assertEquals(
                $case[5],
                CP::getCP(Pokemon::get($case[0]), $case[1], $case[2], $case[3], $case[4])
            );
        }
    }

    const CASES = [
        [Pokemon::MAMOSWINE, 13, 13, 12, 40.5, 3284],
        [Pokemon::GARDEVOIR, 15, 13, 12, 40, 3053],
        [Pokemon::EXEGGUTOR | Mods::ALOLAN, 15, 15, 15, 40, 3014],
        [Pokemon::GENGAR, 13, 15, 15, 40, 2857],
        [Pokemon::ROSERADE, 14, 12, 12, 38, 2828],
        [Pokemon::MACHAMP, 13, 13, 12, 37.5, 2887],
        [Pokemon::ROSERADE, 14, 15, 12, 36.5, 2786],
        [Pokemon::GALLADE, 15, 14, 15, 35, 2866],
        [Pokemon::CHANDELURE, 15, 13, 12, 35, 2993],
        [Pokemon::STOUTLAND, 15, 12, 10, 35, 2574],
        [Pokemon::GARCHOMP, 14, 15, 14, 33.5, 3574],
        [Pokemon::TORTERRA, 12, 15, 13, 33, 2593],
        [Pokemon::MEWTWO, 15, 15, 14, 32.5, 3723],
        [Pokemon::HARIYAMA, 15, 14, 11, 32.5, 2500],
        [Pokemon::ESPEON, 11, 15, 13, 32, 2751],
        [Pokemon::DARKRAI, 15, 12, 14, 32, 3280],
        [Pokemon::WEAVILE, 15, 12, 14, 32, 2633],
        [Pokemon::ROSERADE, 11, 12, 15, 32, 2571],
        [Pokemon::ELECTIVIRE, 15, 15, 15, 31.5, 2705],
        [Pokemon::GOLEM | Mods::ALOLAN, 12, 12, 14, 31, 2512],
        [Pokemon::MILOTIC, 15, 12, 15, 30.5, 2581],
        [Pokemon::RAYQUAZA, 15, 13, 14, 30, 3262],
        [Pokemon::TYRANITAR, 14, 13, 12, 30, 3239],
        [Pokemon::EXCADRILL, 15, 13, 15, 30, 2761],
        [Pokemon::RAMPARDOS, 15, 15, 11, 29, 2709],
        [Pokemon::GARDEVOIR, 15, 15, 14, 29, 2556],
        [Pokemon::PALKIA, 15, 12, 11, 27, 3028],
        [Pokemon::PALKIA, 11, 14, 10, 25, 2771],
        [Pokemon::TERRAKION, 14, 11, 13, 25, 2595],
        [Pokemon::TERRAKION, 12, 12, 10, 25, 2564],
        [Pokemon::DIALGA, 13, 12, 12, 23, 2600],
        [Pokemon::RESHIRAM, 15, 13, 12, 22.5, 2567],
    ];

    const MULTICASES = [
        [
            Pokemon::RALTS,
            14,
            13,
            14,
            [
                10,
                15,
                23,
                31,
                39,
                46,
                54,
                62,
                70,
                78,
                86,
                94,
                102,
                110,
                118,
                126,
                133,
                141,
                149,
                157,
                164,
                172,
                179,
                187,
                194,
                202,
                209,
                217,
                224,
                232,
                239,
                247,
                254,
                261,
                269,
                276,
                284,
                291,
                299,
                306,
                314,
                321,
                329,
                336,
                344,
                351,
                359,
                366,
                374,
                381,
                389,
                396,
                404,
                411,
                419,
                426,
                434,
                441,
                449,
                452,
                456,
                460,
                464,
                467,
                471,
                475,
                479,
                482,
                486,
                490,
                494,
                497,
                501,
                505,
                508,
                512,
                516,
                520,
                523,
                527,
                530,
                533,
                537,
                540,
                544,
                547,
                550,
                554,
                557,
                561,
                564,
                567,
                571,
                574,
                578,
                581,
                585,
                588,
                592,
            ]
        ]
    ];
}