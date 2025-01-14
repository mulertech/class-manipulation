<?php

namespace MulerTech\ClassManipulation\Tests;

use MulerTech\ClassManipulation\ClassManipulation;
use MulerTech\ClassManipulation\Tests\Files\Fake;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ClassManipulationTest extends TestCase
{
    public function testGetClassReflectionMethods(): void
    {
        $reflectionClass = new ReflectionClass(Fake::class);
        $methods = ClassManipulation::getClassReflectionMethods($reflectionClass);
        $this->assertCount(1, $methods);
        $this->assertEquals('fakeMethod', $methods[0]->getName());
    }

    public function testGetClassNameLower(): void
    {
        $this->assertEquals(
            'fake',
            ClassManipulation::getClassNameLower(Fake::class)
        );
    }

    public function testGetClassProperties(): void
    {
        $properties = ClassManipulation::getClassProperties(Fake::class);
        $this->assertCount(1, $properties);
        $this->assertEquals('fakeProperty', $properties[0]->getName());
    }
}
