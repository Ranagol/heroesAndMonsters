<?php

namespace classes\characters\monsters;

use classes\Helper;
use classes\characters\heroes\Hero;
use classes\characters\monsters\Monster;

class Spider extends Monster
{
    public function attack(Hero $hero)
    {
        $randomNumber = Helper::generateRandomInteger(1,2);
        if ($randomNumber = 1) {
            $this->hit($hero);

            return;
        }

        $this->bite($hero);
    }

    public function bite(Hero $hero)
    {
        $hero->setHealth($hero->getHealth() - 8);
    }
}
