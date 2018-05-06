<?php

interface ProductInterface
{
    public function __construct($title, $price);
    public function setMark();
}

interface CarInterface
{
    public function setCarPower($hp);
    public function setEngineSize($es);
}

interface AnimalInterface
{
    public function makeSound();
}

interface TVInterface
{
    public function setTVResolution($resolution);
    public function setColor($color);
}
interface BallpointPenInterface
{
    public function setDesign($design);
    public function setColor($color);
}
interface DuckInterface
{
    public function setColor($color);
    public function setWild($wild);
}
interface CowInterface
{
    public function setColor($color);
    public function setWild($wild);
}
