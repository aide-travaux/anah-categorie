<?php

namespace AideTravaux\Anah\Categorie;

class AnahCategorie
{
    /**
     * Retourne la catégorie de ressources selon l'ANAH
     * @param int Ressources du foyer
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return string
     */
    public static function get(int $ressources, int $compositionFoyer, string $codeRegion): string
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return '';
        }

        switch ($codeRegion) {
            case '11':
                switch ($compositionFoyer) {
                    case 1:
                        if ($ressources < 20593) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 25068) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 2:
                        if ($ressources < 30225) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 36792) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 3:
                        if ($ressources < 36297) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 44188) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 4:
                        if ($ressources < 42381) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 51597) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 5:
                        if ($ressources < 48488) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 59026) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    default:
                        if ($ressources < 48488 + ($compositionFoyer - 5) * 6096) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 59026 + ($compositionFoyer - 5) * 7422) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                }
                return '';
            
            default:
                switch ($compositionFoyer) {
                    case 1:
                        if ($ressources < 14879) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 19074) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 2:
                        if ($ressources < 21760) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 27896) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 3:
                        if ($ressources < 26170) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 33547) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 4:
                        if ($ressources < 30572) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 39192) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    case 5:
                        if ($ressources < 34993) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 44860) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                        break;
                    default:
                        if ($ressources < 34993 + ($compositionFoyer - 5) * 4412) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_2'];
                        } else if ($ressources < 44860 + ($compositionFoyer - 5) * 5651) {
                            return Entries::CATEGORIES_ANAH['cateogrie_anah_1'];
                        }
                }
                return '';
        }
    }

    /**
     * Retourne le plafond de ressources de l'ANAH
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return int
     */
    public static function getPlafond(int $compositionFoyer, string $codeRegion): int
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

    /**
     * Retourne le plafond de ressources de la catégorie Très modeste
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return int
     */
    public static function getPlafondTresModeste(int $compositionFoyer, string $codeRegion): int
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
