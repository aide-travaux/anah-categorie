<?php

namespace AideTravaux\Anah\Categorie\Utils;

use AideTravaux\Anah\Categorie\Data\Entries;

abstract class HelperPlafondTresModeste
{
    /**
     * Retourne le plafond de ressource de la catégorie Très modeste
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
                        return 20593;
                    case 2:
                        return 30225;
                    case 3:
                        return 36297;
                    case 4:
                        return 42381;
                    case 5:
                        return 48488;
                    default:
                        return 48488 + ($compositionFoyer - 5) * 6096;
                }            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        return 14879;
                    case 2:
                        return 21760;
                    case 3:
                        return 26170;
                    case 4:
                        return 30572;
                    case 5:
                        return 34993;
                    default:
                        return 34993 + ($compositionFoyer - 5) * 4412;
                }
        }
    }
}
