<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// PHP NUMBER

echo "<h1>-- 1. PHP NUMBER </h1>";

echo "<p> -- One thing to notice about PHP is that it provides automatic data type conversion. </p>";

echo "<p> -- So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string. </p>";

echo "<p> -- This automatic conversion can sometimes break your code. </p>";

/*

-- One thing to notice about PHP is that it provides automatic data type conversion.

-- So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.
-- This automatic conversion can sometimes break your code.

*/



/*

-- 1.  PHP Integers

    An integer is a number without any decimal part.
    2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats.

    So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

    Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the 
    operands is a float (2.5).
    

    Here are some rules for integers:
       An integer must have at least one digit
       An integer must not have a decimal point
       An integer can be either positive or negative
       Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)


*/

echo "<h2>-- 2. PHP INTEGERS<h2>";

echo "<p> An integer is a number without any decimal part. <br> 2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats. </p>";

echo "<p> So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer. </p>";

echo "<p> Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5). </p>";

echo "<h3>Here are some rules for integers:<h3>";

echo "
<ul>

<li>An integer must have at least one digit</li>
<li>An integer must not have a decimal point</li>
<li>An integer can be either positive or negative</li>
<li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)</li>

</ul>
";

/*

-- PHP has the following functions to check if the type of a variable is integer:
    is_int()
    is_integer() - alias of is_int()
    is_long() - alias of is_int()

    Example


*/

echo "<h3>PHP has the following functions to check if the type of a variable is integer:<h3>";

echo "
<ul>

<li>is_int()</li>
<li>is_integer() - alias of is_int()</li>
<li>is_long() - alias of is_int()</li>

</ul>
";

echo "<p>Example</p>";
echo "<p>Check if the type of a variable is integer:</p>";

$x = 5567;
$y = 55.67;
echo var_dump(is_int($x));
echo var_dump(is_int($y));
echo var_dump(is_long($x));
echo var_dump(is_integer($y));


/*

--  PHP FLOAT 

    A float is a number with a decimal point or a number in exponential form.
    
    2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
    
    The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
    
    PHP has the following functions to check if the type of a variable is float:
       is_float()
       is_double() - alias of is_float()

*/

echo "<h1>-- 3. PHP FLOAT </h1>";
$a = 55.66;
$b = 5555;

echo var_dump(is_double($b));
echo var_dump(is_float($a));


/*

--  PHP Infinity
     
    A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

    PHP has the following functions to check if a numeric value is finite or infinite:

        is_finite()
        is_infinite()
          However, the PHP var_dump() function returns the data type and value:

          Example
           Check if a numeric value is finite or infinite:

*/

echo "<h1>-- 4. PHP Infinity </h1>";
$x = 1.9e411;
var_dump($x);

/*

--  PHP NaN
     
    NaN stands for Not a Number.

    NaN is used for impossible mathematical operations.

    PHP has the following functions to check if a value is not a number:
        is_nan()
          However, the PHP var_dump() function returns the data type and value:

          Example
          Invalid calculation will return a NaN value:

*/

echo "<h1>-- 5. PHP NaN </h1>";
$x = acos(8);
var_dump($x);


/*

--  PHP Numerical Strings

     The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

     Example
      Check if the variable is numeric:

        Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

*/

echo "<h1>-- 6. PHP Numerical Strings </h1>";

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


/*

--  PHP Casting Strings and Floats to Integers

     Sometimes you need to cast a numerical value into another data type.

     The (int), (integer), or intval() function are often used to convert a value to an integer.

     Example
     Cast float and string to integer:

*/

echo "<h1>-- 7. PHP Casting Strings and Floats to Integers </h1>";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

//cast string to int
$x = "Hello World";
$int_cast = (int)$x;
echo $int_cast;


?>

</body>