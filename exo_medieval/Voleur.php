<?php
include_once "Personnage.php";

class Voleur extends Personnage 
{
    function __construct(int $pdv, int $pdVigueur, string $prenom)
    {
        $this->setPdv($pdv);
        $this->setVigueur($pdVigueur);
        $this->setPseudo($prenom);
        $this->setImage("<img src='img/voleur.jpg' alt='Un voleur' style= 'width: 150px; height: 200px;'>");
    }

    public function pseudo()
    {
        return "Votre voleur s'appelle " . $this->getPseudo() .".";
    }
}