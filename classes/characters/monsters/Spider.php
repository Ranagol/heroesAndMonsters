<?php

namespace classes\characters\monsters;

use classes\characters\heroes\Hero;
use classes\characters\monsters\Monster;

class Spider extends Monster
{
    public function bite(Hero $hero)
    {
        $hero->setHealth($hero->getHealth() - 8);
    }
}
