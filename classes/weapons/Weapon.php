<?php

namespace classes\weapons;

abstract class Weapon
{
    protected $damage;

    /**
     * Get the value of damage
     */ 
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */ 
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }

    public function getClass()
    {
        return get_class($this);
    }
}
