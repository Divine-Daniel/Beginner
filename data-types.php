<?php

echo "<h1>PHP Data Types</h1>";

/*

PHP DATA - TYPES

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types: They are eight(8) in number, they are::

--  String
--  Integer
--  Float (floating point numbers - also called double)
--  Boolean
--  Array
--  Object
--  NULL
--  Resource

*/

/*

 PHP STRING

-- A string is a sequence of characters, like "Hello world!".

-- A string can be any text inside quotes. You can use single or double quotes:

-- Example

*/

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;


/*

    PHP INTEGER

    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

    RULES FOR INTEGER:

    --  An integer must have at least one digit
    --  An integer must not have a decimal point
    --  An integer can be either positive or negative
    --  Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

    In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

    EXAMPLES

 */

$x = 5985;
var_dump($x);


/*

PHP FLOAT OR DOUBLE:

A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:

EXAMPLE

*/

$x = 10.365;
var_dump($x);

/*

PHP BOOLEAN:

A Boolean represents two possible states: TRUE or FALSE.

$x = true;
$y = false;

NOTE::: ( Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial. )

*/

/*

PHP ARRAY:

An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

EXAMPLE:

NOTE:: ( You will learn a lot more about arrays in later chapters of this tutorial. )

*/

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

/*

PHP OBJECTS:

An Objects is a data type which stores data and information on how to process that data

in PHP , An Object must be explicitly declared

First we must declare a class of objects. For this, we use the class keyword

A Class is a structure that contains properties and methods

MUST SEARCH::: What are properties and methods in PHP

EXAMPLE

*/

class car {

    function car(){

        $this -> model = "VM";
        
    }

}

// CREATE AN OBJECT
$herbie = new car();

// SHOW OBJECT PROPERTIES
// echo $herbie -> model;


/*

PHP NULL VALUE

Null ia a spacial data type which can have only one value: Null

A  variable of data type NULL is a Variable that has no value assign to it.

TIPS: If a value has no value assign to it, it is automatically assign a value of NULL.

Variable can also be emptied by setting the value to NULL.

EXAMPLE :

*/

$a = "Hello world!";
$a = null;

var_dump($a);

/*

PHP RESOURCES

The special resource type is not an actually data type.
it is the storing of a reference to functions and resource external to PHP.
A common example of using the resource data type is the database call. and also it is an advanced topic 

*/

echo "<h1>PHP RESOURCES</h1>";
echo "<p>
The special resource type is not an actually data type. <br> It is the storing of a reference to functions and resource external to PHP. <br> A common example of using the resource data type is the database call. <br> and also it is an advanced topic </p>";




?>