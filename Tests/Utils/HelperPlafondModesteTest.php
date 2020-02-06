<?php

namespace AideTravaux\Anah\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Anah\Categorie\Utils\HelperPlafondModeste;

class HelperPlafondModesteTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testGet($compositionMenage, $codeRegion, $expect)
    {
        $this->assertEquals(HelperPlafondModeste::get($compositionMenage, $codeRegion), $expect);
    }

    public function dataProvider()
    {
        return [
            [ 1, '11', 25068 ],
            [ 2, '11', 36792 ],
            [ 3, '11', 44188 ],
            [ 4, '11', 51597 ],
            [ 5, '11', 59026 ],
            [ 6, '11', 59026 + 7422 ],
            [ 1, '01', 19074 ],
            [ 2, '01', 27896 ],
            [ 3, '01', 33547 ],
            [ 4, '01', 39192 ],
            [ 5, '01', 44860 ],
            [ 6, '01', 44860 + 5651 ],
            [ 0, '01', 0],
            [ 1, '', 0]
        ];
    }
}
