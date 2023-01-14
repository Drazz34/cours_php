<?php
class Membre
{
    private $pseudo;
    private $actif;

    public function __construct($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($p)
    {
        $this->pseudo = $p;
    }

    public function bannir()
    {
        $this->actif = false;
    }
}

$membre = new Membre("toto"); // la variable $membre est de type Membre();
// $membre -> setPseudo("toto");
echo $membre->getPseudo();

echo "<br><br>";

$panier = new StdClass();
$panier->pomme = 2;
$panier->poire = 3;
echo $panier->poire;

echo "<br><br>";

class Animal
{

    public function typeDeCrie($typeDeCrie)
    {
        echo "le type de crie de l'animal est : " . $typeDeCrie;
    }
}
class Canide extends Animal
{

    public function crie($crie)
    {
        echo $crie;
    }
}
class Chien extends Canide
{

    public function jouer()
    {
        echo "le chien joue ";
    }
}

$chien = new Chien();
$chien->typeDeCrie("l'aboiement");
echo "<br>";
$chien->crie("waouf");
echo "<br>";
$chien->jouer();

echo "<br><br>";

abstract class Animal1
{
    abstract public function parler();
}
 
class Chat1 extends Animal1
{
    public function parler()
    {
        return "Miaou";
    }
}
 
class Chien1 extends Animal1
{
    public function parler()
    {
        return "Ouaf";
    }
}
 
$chat = new Chat1();
echo $chat->parler(); // affiche "Miaou"
echo "<br>";
$chien = new Chien1();
echo $chien->parler(); // affiche "Ouaf"

echo "<br><br>";