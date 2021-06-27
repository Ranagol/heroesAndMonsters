<?php

namespace classes\characters\heroes;

use classes\weapons\Weapon;
use classes\characters\heroes\Hero;
use classes\exceptions\CustomException;

class Wizard extends Hero
{
    private $health = 150;

    public function collectWeapon(Weapon $weapon)
    {
        try {
            if ($weapon instanceof MagicSpell) {
                parent::collectWeapon();
                return;
            }

            throw new CustomException('Wizzards can use only magic spells, they can not use weapons.');

        } catch (CustomException $error) {
            echo 'My error message: ' . $error->getMessage() . '<br>';
        }
    }
}
