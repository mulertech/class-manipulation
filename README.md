
# ClassManipulation

___
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mulertech/class-manipulation.svg?style=flat-square)](https://packagist.org/packages/mulertech/class-manipulation)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mulertech/class-manipulation/tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mulertech/class-manipulation/actions/workflows/tests.yml)
[![GitHub PHPStan Action Status](https://img.shields.io/github/actions/workflow/status/mulertech/class-manipulation/phpstan.yml?branch=main&label=phpstan&style=flat-square)](https://github.com/mulertech/class-manipulation/actions/workflows/phpstan.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/mulertech/class-manipulation.svg?style=flat-square)](https://packagist.org/packages/mulertech/class-manipulation)
[![Test Coverage](https://raw.githubusercontent.com/mulertech/class-manipulation/main/badge-coverage.svg)](https://packagist.org/packages/mulertech/class-manipulation)
___

This Class manipulate classes

___

## Installation

###### _Two methods to install Application package with composer :_

1.
Add to your "**composer.json**" file into require section :

```
"mulertech/class-manipulation": "^1.0"
```

and run the command :

```
php composer.phar update
```

2.
Run the command :

```
php composer.phar require mulertech/class-manipulation "^1.0"
```

___

## Usage

<br>

###### _Get all the Reflection methods of the reflection class given (not include the parents methods or others methods) :_

```
$reflectionMethods = ClassManipulation::getClassReflectionMethods(new ReflectionClass(Foo::class));
```

<br>

###### _Get the class name in lower case :_

```
$className = ClassManipulation::getClassNameLower(/complete/namespace/to/class/ClassName::class);
// classname
```

<br>

###### _Get the properties of a class given (not include the parents properties) :_

```
$properties = ClassManipulation::getClassProperties(/complete/namespace/to/class/ClassName::class);
// ['property1', 'property2']
```
