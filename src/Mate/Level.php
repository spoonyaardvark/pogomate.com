<?php

namespace Pogo\Mate;

class Level
{
    const LEVELS = [
        0,
        0,
        0.094, // 1
        0.1351374318,
        0.16639787,
        0.192650919,
        0.21573247,
        0.2365726613,
        0.25572005,
        0.2735303812,
        0.29024988, // 5
        0.3060573775,
        0.3210876,
        0.3354450362,
        0.34921268,
        0.3624577511,
        0.3752356,
        0.387592416,
        0.39956728,
        0.4111935514,
        0.4225, // 10
        0.4329264091,
        0.44310755,
        0.4530599591,
        0.4627984,
        0.472336093,
        0.48168495,
        0.4908558003,
        0.49985844,
        0.508701765,
        0.51739395, // 15
        0.5259425113,
        0.5343543,
        0.5426357375,
        0.5507927,
        0.5588305862,
        0.5667545,
        0.5745691333,
        0.5822789,
        0.5898879072,
        0.5974, // 20
        0.6048236651,
        0.6121573,
        0.6194041216,
        0.6265671,
        0.6336491432,
        0.64065295,
        0.6475809666,
        0.65443563,
        0.6612192524,
        0.667934, // 25
        0.6745818959,
        0.6811649,
        0.6876849038,
        0.69414365,
        0.70054287,
        0.7068842,
        0.7131691091,
        0.7193991,
        0.7255756136,
        0.7317, // 30
        0.7347410093,
        0.7377695,
        0.7407855938,
        0.74378943,
        0.7467812109,
        0.74976104,
        0.7527290867,
        0.7556855,
        0.7586303683,
        0.76156384, // 35
        0.7644860647,
        0.76739717,
        0.7702972656,
        0.7731865,
        0.7760649616,
        0.77893275,
        0.7817900548,
        0.784637,
        0.7874736075,
        0.7903, // 40
        0.792803968,
        0.7953,
        0.7978,
        0.8003,
        0.8029,
        0.8053,
        0.8078,
        0.8103,
        0.8128,
        0.8153, // 45
        0.8178,
        0.8203,
        0.8228,
        0.8253,
        0.8278,
        0.8303,
        0.8328,
        0.8353,
        0.8378,
        0.8403, // 50
        0.8428,
        0.8453
    ];

    public static function getCpMultiplier(float $level)
    {
        return self::LEVELS[$level * 2] ?? null;
    }
}