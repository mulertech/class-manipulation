<?php

use MulerTech\ClassManipulation\Tests\Files\Fake;
use PHPUnit\Framework\TestCase;

class ClassManipulationTest extends TestCase
{
    public function testGetClassReflectionMethods(): void
    {
        $reflectionClass = new ReflectionClass(Fake::class);
        $methods = MulerTech\ClassManipulation\ClassManipulation::getClassReflectionMethods($reflectionClass);
        $this->assertCount(1, $methods);
        $this->assertEquals('fakeMethod', $methods[0]->getName());
    }

    public function testGetClassNameLower(): void
    {
        $this->assertEquals(
            'fake',
            MulerTech\ClassManipulation\ClassManipulation::getClassNameLower(Fake::class)
        );
    }

    public function testGetClassProperties(): void
    {
        $properties = MulerTech\ClassManipulation\ClassManipulation::getClassProperties(Fake::class);
        $this->assertCount(1, $properties);
        $this->assertEquals('fakeProperty', $properties[0]->getName());
    }
}