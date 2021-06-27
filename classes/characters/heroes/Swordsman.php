<?php

namespace classes\characters\heroes;

use classes\characters\heroes\Hero;
use classes\exceptions\CustomException;
use classes\weapons\Weapon;

class Swordsman extends Hero
{
    private $health = 100;

    public function collectWeapon(Weapon $weapon)
    {
        try {
            if (!($weapon instanceof MagicSpell)) {
                parent::collectWeapon();
                return;
            }

            throw new CustomException('Fighters can not use spells');

        } catch (CustomException $error) {
            echo 'My error message: ' . $error->getMessage() . '<br>';
        }
    }
}
