<?php

class Voiture
{
    private int $nb_roue;
    private int $nb_porte;
    private string $couleur;

    /**
     * Get the value of nb_roue
     *
     * @return int
     */
    public function getNbRoue(): int
    {
        return $this->nb_roue;
    }

    /**
     * Set the value of nb_roue
     *
     * @param int $nb_roue
     *
     * @return self
     */
    public function setNbRoue(int $nb_roue): void
    {
        $this->nb_roue = $nb_roue;

    }

    /**
     * Get the value of nb_porte
     *
     * @return int
     */
    public function getNbPorte(): int
    {
        return $this->nb_porte;
    }

    /**
     * Set the value of nb_porte
     *
     * @param int $nb_porte
     *
     * @return self
     */
    public function setNbPorte(int $nb_porte): void
    {
        $this->nb_porte = $nb_porte;

       
    }

    /**
     * Get the value of couleur
     *
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param string $couleur
     *
     * @return self
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;


    }
}