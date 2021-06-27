<?php

namespace classes\characters\heroes;

use classes\characters\Character;
use classes\weapons\Weapon;

abstract class Hero extends Character
{
    protected $bag = [];
    protected $activeWeapon;
    protected $maxNumberOfWeapons = 2;

    public function attack(Character $character)
    {
        $monster->setHealth($monster->getHealth() - $this->getActiveWeapon()->getDamage());
        echo $this->getClass() . ' has attacked ' . $character->getClass() . 'with ' . $weapon->getClass() . '<br>';
    }

    public function collectWeapon(Weapon $weapon)
    {
        $this->setActiveWeapon($weapon);
        echo $this->getClass() . ' has picked up the ' . $weapon->getClass() . '<br>';
    }

    public function dropActiveWeapon()
    {
        $weaponToDrop = $this->getActiveWeapon();
        $this->setActiveWeapon(null);

        return $weaponToDrop;
    }

    /**
     * Get the value of bag
     */ 
    public function getBag()
    {
        return $this->bag;
    }

    /**
     * Set the value of bag
     *
     * @return  self
     */ 
    public function setBag($bag)
    {
        $this->bag = $bag;

        return $this;
    }

    /**
     * Get the value of activeWeapon
     */ 
    public function getActiveWeapon()
    {
        return $this->activeWeapon;
    }

    /**
     * Set the value of activeWeapon
     *
     * @return  self
     */ 
    public function setActiveWeapon($activeWeapon)
    {
        $this->activeWeapon = $activeWeapon;

        return $this;
    }

    /**
     * Get the value of maxNumberOfWeapons
     */ 
    public function getMaxNumberOfWeapons()
    {
        return $this->maxNumberOfWeapons;
    }

    /**
     * Set the value of maxNumberOfWeapons
     *
     * @return  self
     */ 
    public function setMaxNumberOfWeapons($maxNumberOfWeapons)
    {
        $this->maxNumberOfWeapons = $maxNumberOfWeapons;

        return $this;
    }

    
}
