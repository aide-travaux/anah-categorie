<?php

namespace AideTravaux\Anah\Categorie\Tests\Data;

use PHPUnit\Framework\TestCase;
use AideTravaux\Anah\Categorie\Data\Entries;

class EntriesTest extends TestCase
{
    public function testConstants()
    {
        $reflectionClass = new \ReflectionClass(Entries::class);
        $this->assertNotFalse($reflectionClass->getConstant('CODES_REGION'));
        $this->assertNotFalse($reflectionClass->getConstant('CATEGORIES_ANAH'));
    }

    /**
     * @depends testConstants
     */
    public function testConstantsType()
    {
        $this->assertTrue(\is_array(Entries::CODES_REGION));
        $this->assertTrue(\is_array(Entries::CATEGORIES_CEE));
    }

}
