<?php

namespace classes\characters\heroes;

use classes\characters\Character;

abstract class Hero extends Character
{
    protected $bag = [];
    protected $activeWeapon;

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
}
