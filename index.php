<?php

require __DIR__ .'/vendor/autoload.php';

use classes\FightSimulator;
use classes\factories\Factory;

//CREATING GAME ELEMENTS
$factory = new Factory();
$gameElements = $factory->createGameElements();
$swordsman1 = $gameElements['swordsman1'];
$swordsman2 = $gameElements['swordsman2'];
$wizard = $gameElements['wizard'];
$sword = $gameElements['sword'];
$lance = $gameElements['lance'];
$magicSpell = $gameElements['magi$magicSpell'];
$dragon = $gameElements['drag$dragon'];
$spider = $gameElements['spider'];

//COLLECTING WEAPONS
$swordsman1->collectWeapon($sword);
$swordsman2->collectWeapon($lance);
$wizard->collectWeapon($magicSpell);

//DROPPING AND CHANGING WEAPONS
$droppedSword = $swordsman1->dropActiveWeapon();
$droppedLance = $swordsman2->dropActiveWeapon();
$swordsman1->collectWeapon($droppedLance);
$swordsman2->collectWeapon($droppedSword);

//FIGHTING
$fightSimulator = new FightSimulator($swordsman1, $dragon);


