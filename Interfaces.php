<?php

interface ProductInterface
{
    public function setMark();
}

interface CarInterface
{
    public function setCarPower();
    public function setOilVolume($volume);
}

interface AnimalInterface
{
    public function makeSound();
}
