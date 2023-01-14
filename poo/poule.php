<?php

class Poule extends Animal
{
    public function parler()
    {
        return "La poule fait cot cot.";
    }
 
    public function mange()
    {
        return "Elle mange de la merde.";
    }
 
    public function marche()
    {
        return "Elle marche d’un pas chaloupé.";
    }
}