
# ClassManipulation

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
