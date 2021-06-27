<?php

require __DIR__ .'/vendor/autoload.php';

use classes\Helper;
use classes\Logger;
use classes\factories\Factory;
use classes\exceptions\CustomException;

// Logger::getInstance()->log('testing');
// echo Helper::generateRandomInteger(1,100);

//CREATING GAME ELEMENTS
$factory = new Factory();
$gameElements = $factory->createGameElements();
$swordsman = $gameElements['swordsman'];
$wizard = $gameElements['wizard'];
$sword = $gameElements['sword'];
$lance = $gameElements['lance'];
$magicSpell = $gameElements['magi$magicSpell'];
$dragon = $gameElements['drag$dragon'];
$spider = $gameElements['spider'];
