<?php

abstract class SuperClass
{
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}

abstract class Product extends SuperClass
{
    protected $title;
    protected $price;
    protected $mark;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
    public function setMark() // выделяет марку из названия (первое слово)
    {
        $mark = explode(" ", $this->title);
        $this->mark = $mark[0];
        return $this->mark;
    }
}

abstract class Animal extends SuperClass
{
    protected $breed; // порода
    protected $dwellingPlace; // место обитания

    public function __construct($breed, $dwellingPlace)
    {
        $this->breed = $breed;
        $this->dwellingPlace = $dwellingPlace;
    }
    public function makeSound()
    {
        echo $this->breed . ' говорит - "' . $this->sound . '"<br>';
    }
}

// Машина
class Car extends Product
{
    public $power = 150;
    public $type = 'Car';

    public function setCarPower($hp)
    {
        $this->power = $hp;
    }
}

// Телевизор
class TV extends Product
{
    public $resolution = '10*10';
    public $color = 'black';

    public function setTVResolution($resolution)
    {
        $this->resolution = $resolution;
    }
}

// Шариковая ручка
class BallpointPen extends Product
{
    public $color;

    public function setPenColor($color)
    {
        $this->color = $color;
    }
}

// Утка
class Duck extends Animal
{
    protected $type = 'Duck';
    protected $sound = 'Кря';
}

// Корова
class Cow extends Animal
{
    protected $type = 'Cow';
    protected $sound = 'Муу';
}
