<?php

namespace classes;

class Helper
{
    static public function generateRandomInteger($minValue, $maxValue):int
    {
        return random_int($minValue, $maxValue);
    }

    static public function generateRandomName($arrayOfNames):string
    {
        $randomKey = array_rand($arrayOfNames);
        $randomName = $arrayOfNames[$randomKey];

        return $randomName;
    }
}