<?php

namespace AideTravaux\Anah\Categorie;

class AnahCategorie
{
    /**
     * 
     * @param int Ressources du foyer
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return null|string
     */
    public static function get(int $ressources, int $compositionFoyer, string $codeRegion): ?string
    {
        if (!in_array($codeRegion, Entries::CODES_REGION) || !$compositionFoyer) {
            return null;
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
                return null;
            
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
                return null;
        }
    }

}
