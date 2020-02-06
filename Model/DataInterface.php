<?php

namespace AideTravaux\Anah\Categorie\Model;

interface DataInterface
{
    /**
     * Retourne le code administratif de la région
     * @return string
     */
    public function getCodeRegion(): string;

    /**
     * Retourne le code administratif du département
     * @return string
     */
    public function getCodeDepartement(): string;

    /**
     * Retourne le nombre de personnes composant le ménages
     * @return int
     */
    public function getCompositionMenage(): int;

    /**
     * Retourne les ressources du ménage
     */
    public function getRessourcesMenage(): float;

}
