<?php

abstract class Animal
{
 
    private $name;
 
    function getName()
    {
        return $this->name;
    }
 
    function setName($name): void
    {
        $this->name = $name;
    }
 
 
    abstract function mange();
}
interface ecoutable
{
    public function parle();
}
 
class Chat extends Animal implements ecoutable
{
    public function parle()
    {
        return "Miaou";
    }
    public function mange()
    {
        return "croquettes";
    }
}
class Chien extends Animal implements ecoutable
{
    public function parle()
    {
        return "Ouaf";
    }
    public function mange()
    {
        return "croquettes";
    }
}
class Poisson extends Animal
{
    public function mange()
    {
        return "algues";
    }
}
 
$chat = new Chat();
echo $chat->parle(); // affiche "Miaou"
echo "<br>";
$chien = new Chien();
echo $chien->parle(); // affiche "Ouaf"
echo "<br>";
$poisson = new Poisson();
echo $poisson->mange(); // affiche "Algue"