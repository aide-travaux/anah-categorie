<?php

namespace Anah\Categorie\Tests;

use PHPUnit\Framework\TestCase;
use Anah\Categorie\AnahCategorie;

class AnahCategorieTest extends TestCase
{
    public function testInvalidHousehold()
    {
        $this->expectException(\Exception::class);
        AnahCategorie::get(1, 0, '01');
    }

    public function testInvalidCodeRegion()
    {
        $this->expectException(\Exception::class);
        AnahCategorie::get(1, 1, 'CODE');
    }

    public function testValid()
    {
        $cat = AnahCategorie::get(1, 1, '11');
        $this->assertTrue(\is_null($cat) || \is_string($cat));
    }

}
