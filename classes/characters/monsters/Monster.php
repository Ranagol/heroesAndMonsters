<?php

namespace classes\characters\monsters;

use classes\characters\Character;
use classes\characters\heroes\Hero;

abstract class Monster extends Character
{
    abstract public function attack(Hero $hero);

    public function hit(Hero $hero){
        $hero->setHealth($hero->getHealth() - 5);
    }
}
