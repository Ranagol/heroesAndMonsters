<?php

namespace classes\factories;

use classes\weapons\Lance;
use classes\weapons\Sword;
use classes\weapons\MagicSpell;
use classes\characters\heroes\Wizard;
use classes\characters\monsters\Dragon;
use classes\characters\monsters\Spider;
use classes\characters\heroes\Swordsman;

class Factory
{
    public function createGameElements()
    {
        $gameElements = [];
        $swordsman1 = new Swordsman();
        $gameElements['swordsman1'] = $swordsman1;
        $swordsman2 = new Swordsman();
        $gameElements['swordsman2'] = $swordsman2;

        $wizard = new Wizard();
        $gameElements['wizard'] = $wizard;
        $sword = new Sword();
        $gameElements['sword'] = $sword;
        $lance = new Lance();
        $gameElements['lance'] = $lance;
        $magicSpell = new MagicSpell();
        $gameElements['magicSpell'] = $magicSpell;
        $dragon = new Dragon();
        $gameElements['dragon'] = $dragon;
        $spider = new Spider();
        $gameElements['spider'] = $spider;

        return $gameElements;
    }
}
