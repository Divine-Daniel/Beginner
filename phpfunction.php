<?php declare(strict_types=1);

// PHP FUNCTION
// NOTE: PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
// PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task


/*

syntax
function functionName(){

    code tobe executed;

}

Tip: Give the function a name that reflects what the function does!

In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name followed by brackets ():

Example

*/

function writeMsg(){

    echo "Hello World!";

}

writeMsg();

//PHP Function Arguments

/*

Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:

    Example

*/

function FamilyName($fname){

    echo "$fname Refsnes <br>";

}

FamilyName("jane");
FamilyName("jani");
FamilyName("joe");
FamilyName("Borge");
FamilyName("Kai Jim");

//The following example has a function with two arguments ($fname and $year):

function name($fname, $year){
    
    echo "<b> $fname Refsnes, Born in $year </b> <br>";
    
}
name("jane", 1995);
name("jani", 1985);
name("Borge", 1965);
name("Kai Jim", 1966);
//PHP is a Loosely Typed Language

/*

In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatch.

In the following example we try to send both a number and a string to the function without using strict:

Example

*/

function addNumbers($a, $b){

    return $a + $b;

}

echo addNumbers(5, "5 Days"), "<br>";
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
// since strict is enabled and "5 days" is not an integer, an error will be thrown

// NOTE : The strict declaration forces things to be used in the intended way.

//PHP Default Argument Value

/*

The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:

Example

*/

function setHeight( $minHeight = 50 ){

    echo "The height is : $minHeight <br>";

}

setheight(350);
setheight();
setheight(135);
setheight(80);


//PHP Functions - Returning Values

/*

To let a function return a value, Use the the "return" statement.

Example

*/

function sum( $x, $y ){

    $z = $x + $y;

    return $z;

}

echo "5 + 10 : " . sum( 5, 10) . "<br>";
echo "7 + 13 : " . sum( 7, 13 ) . "<br>";
echo "2 + 4 :  " . sum( 2, 4 ) . "<br>";

// PHP Return Type Declaration 

/*

PHP 7 also support Type Declaration for the "return" statement. like with the type declararionfor function
argument

To declare a type for the function, add a clone ( : ) and the type right before the opening curly ( { )
bracket when declaring the function.

Example

*/

function addNumber( $a, $b ) : float {

    return $a + $b;

}

echo addNumber( 5.5, 10.3 ) . "<br>";

function addnumberss( $a, $b ) : int {

    return (int) ($a + $b);

}

echo addnumber( 10, 10 );




?>