<?php

namespace AideTravaux\Anah\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondTresModeste;

class HelperPlafondTresModesteTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGet($compositionMenage, $codeRegion, $expect)
    {
        $this->assertEquals(HelperPlafondTresModeste::get($compositionMenage, $codeRegion), $expect);
    }

    public function dataProvider()
    {
        return [
            [ 1, '11', 20593 ],
            [ 2, '11', 30225 ],
            [ 3, '11', 36297 ],
            [ 4, '11', 42381 ],
            [ 5, '11', 48488 ],
            [ 6, '11', 48488 + 6096 ],
            [ 1, '01', 14879 ],
            [ 2, '01', 21760 ],
            [ 3, '01', 26170 ],
            [ 4, '01', 30572 ],
            [ 5, '01', 34993 ],
            [ 6, '01', 34993 + 4412 ],
            [ 0, '01', 0],
            [ 1, '', 0]
        ];
    }
}
