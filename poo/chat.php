<?php

class Chat extends Animal
{
    public function parler()
    {
        return "Le chat fait miaou.";
    }
 
    public function mange()
    {
        return "Il mange du poisson.";
    }
 
    public function marche()
    {
        return "Il marche d’un pas de velours.";
    }
}