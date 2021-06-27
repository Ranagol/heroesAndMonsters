<?php

namespace classes;

use classes\Helper;
use classes\characters\Character;
use classes\characters\heroes\Hero;
use classes\characters\monsters\Monster;

class FightSimulator
{
    private $firstAttackingCharacter;
    private $lastAttackingCharacter;
    
    public function __construct(Hero $hero, Monster $monster)
    {
        $this->decideAttackOrder($hero, $monster);
        $this->doFighting();
    }

    public function decideAttackOrder(Hero $hero, Monster $monster)
    {
        $randomNumber = Helper::generateRandomInteger(0, 100);
        if ($randomNumber < 50) {
            $this->setFirstAttackingCharacter($hero);
            $this->setLastAttackingCharacter($monster);
        } else {
            $this->setFirstAttackingCharacter($monster);
            $this->setLastAttackingCharacter($hero);
        }
    }

    public function doFighting()
    {
        $firstAttackingCharacter = getFirstAttackingCharacter();
        $lastAttackingCharacter = getLastAttackingCharacter();
        while ($firstAttackingCharacter->getHealth() > 0 || $lastAttackingCharacter()->getHealth() > 0) {
            $firstAttackingCharacter->attack($lastAttackingCharacter);
            $lastAttackingCharacter->attack($firstAttackingCharacter);
        }
        $this->checkWhoIsAlive($firstAttackingCharacter, $lastAttackingCharacter);
    }

    public function checkWhoIsAlive(Character $firstAttackingCharacter, Character $lastAttackingCharacter)
    {
        try {
            if ($firstAttackingCharacter->getHealth() > 0) {
                echo $firstAttackingCharacter->getClass() . ' has won in a fight against' . $lastAttackingCharacter->getClass() . '!<br>';
            } elseif ($lastAttackingCharacter->getHealth() > 0) {
                echo $lastAttackingCharacter->getClass() . ' has won in a fight against' . $firstAttackingCharacter->getClass() . '!<br>';
            } else {
                throw new CustomException('There is an issue regarding fight simulation and health points.');
            }
        } catch (CustomException $error) {
            echo 'My error message: ' . $error->getMessage() . '<br>';
            echo 'The error was triggered in this file: ' . $error->getFile(). '<br>';
            echo 'The error was triggered on this line: ' . $error->getLine(). '<br>';
        }
    }





    /**
     * Get the value of firstAttackingCharacter
     */ 
    public function getFirstAttackingCharacter()
    {
        return $this->firstAttackingCharacter;
    }

    /**
     * Set the value of firstAttackingCharacter
     *
     * @return  self
     */ 
    public function setFirstAttackingCharacter($firstAttackingCharacter)
    {
        $this->firstAttackingCharacter = $firstAttackingCharacter;

        return $this;
    }

    /**
     * Get the value of lastAttackingCharacter
     */ 
    public function getLastAttackingCharacter()
    {
        return $this->lastAttackingCharacter;
    }

    /**
     * Set the value of lastAttackingCharacter
     *
     * @return  self
     */ 
    public function setLastAttackingCharacter($lastAttackingCharacter)
    {
        $this->lastAttackingCharacter = $lastAttackingCharacter;

        return $this;
    }
}
