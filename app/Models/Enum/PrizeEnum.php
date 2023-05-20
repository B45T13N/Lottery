<?php

namespace App\Models\Enum;

class PrizeEnum
{
    const TESLA = 'Tesla';
    const WEEKEND_MONTAGNE = 'Weekend à la montagne';
    const PS5 = 'PS5';
    const PC_GAMER = 'PC Gamer';
    const JEU_CARTES = 'Jeu de cartes';

    private static function getProbabilities()
    {
        return [
            self::TESLA => 0.01,
            self::WEEKEND_MONTAGNE => 0.09,
            self::PS5 => 0.1,
            self::PC_GAMER => 0.3,
            self::JEU_CARTES => 0.5,
        ];
    }

    public static function selectLot()
    {
        $probabilities = PrizeEnum::getProbabilities();
        $randomNumber = mt_rand() / mt_getrandmax();

        $cumulativeProbability = 0;
        foreach ($probabilities as $lot => $probability) {
            $cumulativeProbability += $probability;
            if ($randomNumber <= $cumulativeProbability) {
                return $lot;
            }
        }

        return end($probabilities);
    }
}
