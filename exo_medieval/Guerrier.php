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
     * @return void
     */ 
    public function setForce($force)
    {
        $this->force = $force;
    }
}