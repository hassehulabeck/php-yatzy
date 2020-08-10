<?php

class Dice
{

    protected $value;

    public function __construct()
    {
        $random = mt_rand(1, 6);
        $this->setValue($random);
    }

    public function setValue($value)
    {
        if ($value >= 1 && $value <= 6) {
            $this->value = $value;
        }
    }

    public function getValue()
    {
        return $this->value;
    }
}
