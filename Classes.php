<?php
require_once 'interfaces.php';

abstract class SuperClass
{
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}

abstract class Product extends SuperClass implements ProductInterface
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

abstract class Animal extends SuperClass implements AnimalInterface
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
class Car extends Product implements CarInterface
{
    public $power = 150;
    public $engineSize = 1.6;
    public $type = 'Car';

    public function setCarPower($hp)
    {
        $this->power = $hp;
    }
    public function setEngineSize($es)
    {
        $this->engineSize = $es;
    }
}

// Телевизор
class TV extends Product implements TVInterface
{
    public $resolution = '10*10';
    public $color = 'black';

    public function setTVResolution($resolution)
    {
        $this->resolution = $resolution;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
}

// Шариковая ручка
class BallpointPen extends Product implements BallpointPenInterface
{
    public $color;
    public $design = 'pressure';

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setDesign($design)
    {
        $this->design = $design;
    }
}

// Утка
class Duck extends Animal implements DuckInterface
{
    protected $type = 'Duck';
    protected $sound = 'Кря';
    public $color;
    public $wild = 'yes';

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setWild($wild)
    {
        $this->wild = $wild;
    }
}

// Корова
class Cow extends Animal implements CowInterface
{
    protected $type = 'Cow';
    protected $sound = 'Муу';
    public $color;
    public $wild;

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setWild($wild)
    {
        $this->wild = $wild;
    }
}
