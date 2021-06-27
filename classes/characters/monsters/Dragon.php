<?php

namespace classes\characters\monsters;

use classes\characters\heroes\Hero;
use classes\characters\monsters\Monster;

class Dragon extends Monster
{
    public function blewFire(Hero $hero)
    {
        $hero->setHealth($hero->getHealth() - 20);
    }
}
