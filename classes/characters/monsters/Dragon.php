<?php

namespace classes\characters\monsters;

use classes\Helper;
use classes\characters\Character;
use classes\characters\heroes\Hero;
use classes\characters\monsters\Monster;

class Dragon extends Monster
{
    public function attack(Character $character)
    {
        $randomNumber = Helper::generateRandomInteger(1,2);
        if ($randomNumber = 1) {
            $this->hit($hero);

            return;
        }

        $this->blewFire($hero);
    }

    public function blewFire(Hero $hero)
    {
        $hero->setHealth($hero->getHealth() - 20);
    }
}
