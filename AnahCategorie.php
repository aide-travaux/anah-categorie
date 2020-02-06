<?php

namespace AideTravaux\Anah\Categorie;

use AideTravaux\Anah\Categorie\Data\Entries;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondModeste;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondTresModeste;

abstract class AnahCategorie
{
    /**
     * Retourne la catégorie de ressources selon l'ANAH
     * @param int
     * @param int
     * @param string
     * @return string
     */
    public static function get(int $ressources, int $compositionFoyer, string $codeRegion): string
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return '';
        }

        if ( $ressources < HelperPlafondTresModeste::get($compositionFoyer, $codeRegion) ) {
            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
        } elseif ( $ressources < HelperPlafondModeste::get($compositionFoyer, $codeRegion) ) {
            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
        }
        return '';
    }

    /**
     * Retourne le plafond de ressources de l'ANAH
     * @param int
     * @param string
     * @return int
     */
    public static function getPlafond(int $compositionFoyer, string $codeRegion): int
    {
        return HelperPlafondModeste::get($compositionFoyer, $codeRegion);
    }

    /**
     * Retourne le plafond de ressources de la catégorie Très modeste
     * @param int
     * @param string
     * @return int
     */
    public static function getPlafondTresModeste(int $compositionFoyer, string $codeRegion): int
    {
        return HelperPlafondTresModeste::get($compositionFoyer, $codeRegion);
    }

}
