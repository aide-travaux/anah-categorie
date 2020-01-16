<?php

namespace Anah\Category\Tests;

use PHPUnit\Framework\TestCase;
use Anah\Category\AnahCategory;

class AnahCategoryTest extends TestCase
{
    public function testInvalidHousehold()
    {
        $this->expectException(\Exception::class);
        AnahCategory::get(1, 0, '01');
    }

    public function testInvalidCodeRegion()
    {
        $this->expectException(\Exception::class);
        AnahCategory::get(1, 1, 'CODE');
    }

    public function testValid()
    {
        $cat = AnahCategory::get(1, 1, '11');
        $this->assertTrue(\is_null($cat) || \is_string($cat));
    }

}
