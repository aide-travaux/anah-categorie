<?php

namespace AideTravaux\Anah\Categorie\Utils;

use AideTravaux\Anah\Categorie\Data\Entries;

abstract class HelperPlafondModeste
{
    /**
     * Retourne le plafond de ressource de la catégorie Modeste
     * @param int
     * @param string
     * @return int
     */
    public static function get(int $compositionFoyer, string $codeRegion): int
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return 0;
        }

        switch ($codeRegion) {
            case '11':
                switch ($compositionFoyer) {
                    case 1:
                        return 25068;
                    case 2:
                        return 36792;
                    case 3:
                        return 44188;
                    case 4:
                        return 51597;
                    case 5:
                        return 59026;
                    default:
                        return 59026 + ($compositionFoyer - 5) * 7422;
                }            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        return 19074;
                    case 2:
                        return 27896;
                    case 3:
                        return 33547;
                    case 4:
                        return 39192;
                    case 5:
                        return 44860;
                    default:
                        return 44860 + ($compositionFoyer - 5) * 5651;
                }
        }
    }
}
