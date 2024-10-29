<?php

namespace MulerTech\ClassManipulation;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;

/**
 * Class ClassManipulation
 * @package MulerTech\ClassManipulation
 * @author Sébastien Muler
 */
class ClassManipulation
{

    /**
     * Get all the Reflection methods of the reflection class given,
     * not include the parents methods or others methods, only internal methods.
     * @param ReflectionClass $reflection_class
     * @return ReflectionMethod[]|null
     */
    public static function getClassReflectionMethods(ReflectionClass $reflection_class): ?array
    {
        $current_class_name = $reflection_class->getShortName();
        $list = $reflection_class->getMethods();
        return array_reduce($list, static function ($list, $method) use ($current_class_name) {
            $namespace = explode('\\', $method->class);
            $class_name = end($namespace);
            if ($class_name === $current_class_name) {
                $list[] = $method;
            }
            return $list;
        });
    }

    /**
     * Get the class name in lower case :
     * /Fully/Qualified/Class/Name -> name
     * @param string $class Complete class name with or without namespace
     * @return string Name of this class without namespace in lowercase
     */
    public static function getClassNameLower(string $class): string
    {
        return ($pos = strrpos($class, '\\')) ? strtolower(substr($class, $pos + 1)) : strtolower($class);
    }

    /**
     * @param string $class
     * @return array|null
     * @throws ReflectionException
     */
    public static function getClassProperties(string $class): ?array
    {
        $reflectionClass = new ReflectionClass($class);
        $classAndParentProperties = $reflectionClass->getProperties();
        return array_filter($classAndParentProperties, static function ($property) use ($class) {
            return $property->class === $class;
        });
    }
}