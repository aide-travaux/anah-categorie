<?php

namespace AideTravaux\Anah\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Anah\Categorie\AnahCategorie;
use AideTravaux\Anah\Categorie\Entries;

class AnahCategorieTest extends TestCase
{
    /**
     * @dataProvider simulationProvider
     */
    public function testSimulation(int $ressources, int $compositionFoyer, string $codeRegion, ?string $expect)
    {
        $this->assertEquals(AnahCategorie::get($ressources, $compositionFoyer, $codeRegion), $expect);
    }

    public function simulationProvider()
    {
        return [
            [25068, 1, '11', null],
            [36792, 2, '11', null],
            [44188, 3, '11', null],
            [51597, 4, '11', null],
            [59026, 5, '11', null],
            [59026 + 7422, 6, '11', null],

            [25068 - 1, 1, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [36792 - 1, 2, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [44188 - 1, 3, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [51597 - 1, 4, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [59026 - 1, 5, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [59026 + 7422 - 1, 6, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],

            [20593 - 1, 1, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [30225 - 1, 2, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [36297 - 1, 3, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [42381 - 1, 4, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [6096 - 1, 5, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [6096 + 6096 - 1, 6, '11', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],

            [19074, 1, '02', null],
            [27896, 2, '02', null],
            [33547, 3, '02', null],
            [39192, 4, '02', null],
            [44860, 5, '02', null],
            [44860 + 5651, 6, '02', null],

            [19074 - 1, 1, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [27896 - 1, 2, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [33547 - 1, 3, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [39192 - 1, 4, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [44860 - 1, 5, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],
            [44860 + 5651 - 1, 6, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_1']],

            [14879 - 1, 1, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [21760 - 1, 2, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [26170 - 1, 3, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [30572 - 1, 4, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [34993 - 1, 5, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']],
            [34993 + 4412 - 1, 6, '02', Entries::CATEGORIES_ANAH['cateogrie_anah_2']]
        ];
    }

}
