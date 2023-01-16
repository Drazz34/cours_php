<?php

abstract class Personnage
{
    private int $pdv;
    private int $vigueur;
    private string $image;
    private string $pseudo;

    public function ptsDeVie()
    {
        return $this->getPseudo() . " a " . $this->getPdv() . " points de vie.";
    }
    public function vigueur()
    {
        return $this->getPseudo() . " a " . $this->getVigueur() . " points de vigueur.";
    }
    public function image()
    {
        return $this->getImage();
    }

    // fonction pour attaquer, le personnage attaquant perd des points de vigueur, le personnage attaqué perd des points de vie.

    public function attaque(Personnage $personnage, $ptsDegat, $ptsVigueur)
    {
        $this->setVigueur($this->getVigueur() - $ptsVigueur);
        $personnage->setPdv($personnage->getPdv() - $ptsDegat);
        
        if($this->getVigueur() < 1)
        {
            return $this->getPseudo() . " n'a plus assez de vigueur et ne peut pas attaquer!";
        }

        if ($personnage->getPdv() < 1) 
        {
            return $this->getPseudo() . " attaque " . $personnage->getPseudo() . ", il lui reste " . $this->getVigueur() . " points de vigueur. "
                . $personnage->getPseudo() . " perd $ptsDegat points de vie. " . $personnage->getPseudo() . " est mort(e)!";
        } else 
        {
            return $this->getPseudo() . " attaque " . $personnage->getPseudo() . ", il lui reste " . $this->getVigueur() . " points de vigueur. "
                . $personnage->getPseudo() . " perd $ptsDegat points de vie. " . $personnage->getPseudo() . " possède désormais " . $personnage->getPdv() . " points de vie.";
        }
    }

    // fonction d'esquive du personnage, il perd de la vigueur.

    public function esquive()
    {
        $this->setVigueur($this->getVigueur() - 20);
        if($this->getVigueur() < 1)
        {
            return $this->getPseudo() . " n'a plus de point de vigueur et ne peut plus se déplacer!";
        }
        else
        {
            return $this->getPseudo() . " esquive, il lui reste " . $this->getVigueur() . " points de vigueur.";
        }
    }

    // fonction qui affiche les informations du joueur.

    public function info()
    {
        if($this->getVigueur() < 1 && $this->getPdv() < 1)
        {
            return $this->getPseudo() . " possède aucun point de vie et aucun point de vigueur.";
        }
        if($this->getVigueur() < 1)
        {
            return $this->getPseudo() . " possède " . $this->getPdv() . " points de vie et aucun point de vigueur.";
        }
        if($this->getPdv() < 1)
        {
            return $this->getPseudo() . " possède aucun point de vie et " . $this->getVigueur() . " points de vigueur.";
        }
        else
        {
        return $this->getPseudo() . " possède " . $this->getPdv() . " points de vie et " . $this->getVigueur() . " points de vigueur.";
        }
       
    }

    /**
     * Get the value of pdv
     */
    public function getPdv()
    {
        return $this->pdv;
    }

    /**
     * Set the value of pdv
     *
     * @return  void
     */
    public function setPdv($pdv)
    {
        $this->pdv = $pdv;
    }

    /**
     * Get the value of vigueur
     */
    public function getVigueur()
    {
        return $this->vigueur;
    }

    /**
     * Set the value of vigueur
     *
     * @return  void
     */
    public function setVigueur($vigueur)
    {
        $this->vigueur = $vigueur;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  void
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  void
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
}
