<?php

class Chien extends Animal
{
    public function parler()
    {
        return "Le chien fait ouaf.";
    }
 
    public function mange()
    {
        return "Il mange des croquettes.";
    }
 
    public function marche()
    {
        return "Il marche d’un pas de patapouf.";
    }
}