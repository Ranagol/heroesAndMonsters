<?php

namespace classes\characters\monsters;

use classes\characters\Character;

abstract class Monster extends Character
{
    public function hit(Hero $hero){
        $hero->setHealth($hero->getHealth() - 5);
    }
}
