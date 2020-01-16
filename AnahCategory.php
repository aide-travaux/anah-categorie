<?php

namespace Anah\Category;

class AnahCategory
{
    /**
     * Liste des catégories de ressource
     */
    const CATEGORIES = [
        'Très modeste', 'Modeste'
    ];

    /**
     * Liste des codes région
     */
    const CODES_REGION = [
        "01", "02", "03", "04", "06", "11", "24", "27", "28",
        "32", "44", "52", "53", "75", "76", "84", "93", "94"
    ];

    /**
     * 
     * @param int Ressources du foyer
     * @param int Composition du foyer
     * @param string Code administratif de la région
     * @return null|string
     */
    public static function get(int $income, int $household, string $codeRegion): ?string
    {
        self::validateHousehold($household);
        self::validateCode($codeRegion);

        switch ($codeRegion) {
            case '11':
                switch ($household) {
                    case 1:
                        if ($income < 20593) {
                            return self::CATEGORIES[0];
                        } else if ($income < 25068) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 2:
                        if ($income < 30225) {
                            return self::CATEGORIES[0];
                        } else if ($income < 36792) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 3:
                        if ($income < 36297) {
                            return self::CATEGORIES[0];
                        } else if ($income < 44188) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 4:
                        if ($income < 42381) {
                            return self::CATEGORIES[0];
                        } else if ($income < 51597) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 5:
                        if ($income < 48488) {
                            return self::CATEGORIES[0];
                        } else if ($income < 59026) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    default:
                        if ($income < 48488 + ($household - 5) * 6096) {
                            return self::CATEGORIES[0];
                        } else if ($income < 59026 + ($household - 5) * 7422) {
                            return self::CATEGORIES[1];
                        }
                }
                return null;
            
            default:
                switch ($household) {
                    case 1:
                        if ($income < 14879) {
                            return self::CATEGORIES[0];
                        } else if ($income < 19074) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 2:
                        if ($income < 21760) {
                            return self::CATEGORIES[0];
                        } else if ($income < 27896) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 3:
                        if ($income < 26170) {
                            return self::CATEGORIES[0];
                        } else if ($income < 33547) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 4:
                        if ($income < 30572) {
                            return self::CATEGORIES[0];
                        } else if ($income < 39192) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    case 5:
                        if ($income < 34993) {
                            return self::CATEGORIES[0];
                        } else if ($income < 44860) {
                            return self::CATEGORIES[1];
                        }
                        break;
                    default:
                        if ($income < 34993 + ($household - 5) * 4412) {
                            return self::CATEGORIES[0];
                        } else if ($income < 44860 + ($household - 5) * 5651) {
                            return self::CATEGORIES[1];
                        }
                }
                return null;
        }
    }

    private static function validateCode(string $codeRegion)
    {
        if (!\in_array($codeRegion, self::CODES_REGION)) {
            throw new \Exception("Invalid code region value");
        }
    }

    private static function validateHousehold(int $household)
    {
        if (!$household) {
            throw new \Exception("Invalid household value");
        }
    }
}
