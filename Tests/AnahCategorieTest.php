<?php

namespace AideTravaux\Anah\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Anah\Categorie\AnahCategorie;
use AideTravaux\Anah\Categorie\Data\Entries;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondModeste;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondTresModeste;

class AnahCategorieTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGet(int $compositionFoyer, string $codeRegion)
    {
        $plafondModeste = HelperPlafondModeste::get($compositionFoyer, $codeRegion);
        $plafondTresModeste = HelperPlafondTresModeste::get($compositionFoyer, $codeRegion);

        $this->assertEquals( 
            AnahCategorie::get( $plafondModeste, $compositionFoyer, $codeRegion ), 
            ''
        );
        $this->assertEquals( 
            AnahCategorie::get( $plafondModeste - 1, $compositionFoyer, $codeRegion ), 
            Entries::CATEGORIES_ANAH['cateogrie_anah_1']
        );
        $this->assertEquals(
            AnahCategorie::get( $plafondTresModeste - 1, $compositionFoyer, $codeRegion ),
            Entries::CATEGORIES_ANAH['cateogrie_anah_2']
        );
    }

    public function testGetFailed()
    {
        $this->assertEquals(AnahCategorie::get(0, 0, ''), '');
        $this->assertEquals(AnahCategorie::get(0, 1, ''), '');
        $this->assertEquals(AnahCategorie::get(0, 0, '01'), '');
    }

    public function testGetPlafond()
    {
        $this->assertTrue(\is_int(AnahCategorie::getPlafond(0, '')));
    }

    public function testGetPlafondTresModeste()
    {
        $this->assertTrue(\is_int(AnahCategorie::getPlafondTresModeste(0, '')));
    }

    public function dataProvider()
    {
        return [
            [ 1, '11' ],
            [ 2, '11' ],
            [ 3, '11' ],
            [ 4, '11' ],
            [ 5, '11' ],
            [ 6, '11' ],
            [ 1, '01' ],
            [ 2, '01' ],
            [ 3, '01' ],
            [ 4, '01' ],
            [ 5, '01' ],
            [ 6, '01' ]
        ];
    }

}
