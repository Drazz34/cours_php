<?php
include_once "Personnage.php";

class Guerrier extends Personnage 
{
    
    private int $force = 500;

    function __construct(int $pdv, int $pdVigueur, string $prenom) // parametre pr créer un new guerrier
    {
        $this->setPdv($pdv);
        $this->setVigueur($pdVigueur);
        $this->setImage("<img src='img/guerrier.jpg' alt='Un guerrier' style= 'width: 150px; height: 200px;'>");
        $this->setPseudo($prenom);
    }

    
    public function pseudo()
    {
        return "Votre guerrier s'appelle " . $this->getPseudo() . ".";
    }
    public function ptsDeForce()
    {
        return $this->getPseudo() . " a " . $this->getForce() . " points de force.";
    }
    // public function attaque($personnage)
    // {
    //     $this->setVigueur($this->getVigueur()-50);
    //     $personnage->setPdv($personnage->getPdv()-50);
    //     // $this->setVigueur(50); si je veux montrer ce qu'il a consommé comme vigueur.
    //     return $this->getPseudo() . " attaque " . $personnage->getPseudo() . ", il lui reste " . $this->getVigueur() . " points de vigueur. "
    //      . $personnage->getPseudo() . " perd 50 points de vie. " . $personnage->getPseudo() . " possède désormais " . $personnage->getPdv() . " points de vie.";
    // }
    // public function attaqueGuerrier($personnage)
    // {
    //     return $this->attaque($personnage, 50, 50);
    // }

    /**
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  void
     */ 
    public function setForce($force)
    {
        $this->force = $force;
    }
}