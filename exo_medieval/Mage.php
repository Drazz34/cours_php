<?php
include_once "Personnage.php";

class Mage extends Personnage 
{ 
    private int $magie = 500;

    function __construct(int $pdv, int $pdVigueur, string $prenom)
    {
        $this->setPdv($pdv);
        $this->setVigueur($pdVigueur);
        $this->setPseudo($prenom);
        $this->setImage("<img src='img/mage.jpg' alt='Une mage' style= 'width: 250px; height: 200px;'>");
    }
    
    public function pseudo()
    {
        return "Votre mage s'appelle " . $this->getPseudo() . ".";
    }
    public function ptsDeMagie()
    {
        return $this->getPseudo() . " a " . $this->getMagie() . " points de magie.";
    }

    /**
     * Get the value of magie
     */ 
    public function getMagie()
    {
        return $this->magie;
    }

    /**
     * Set the value of magie
     *
     * @return  void
     */ 
    public function setMagie($magie)
    {
        $this->magie = $magie;
    }
}